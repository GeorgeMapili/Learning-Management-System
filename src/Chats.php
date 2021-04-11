<?php

namespace MyApp;
use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
use core\teacher\ChatUser;
use config\Database;

class Chat implements MessageComponentInterface {
    protected $clients;

    public function __construct() {
        $this->clients = new \SplObjectStorage;
    }

    public function onOpen(ConnectionInterface $conn) {
        // Store the new connection to send messages to later
        $this->clients->attach($conn);

        echo "New connection! ({$conn->resourceId})\n";
    }

    public function onMessage(ConnectionInterface $from, $msg) {
        $numRecv = count($this->clients) - 1;
        echo sprintf('Connection %d sending message "%s" to %d other connection%s' . "\n"
            , $from->resourceId, $msg, $numRecv, $numRecv == 1 ? '' : 's');

        $data = json_decode($msg, true);

        $db = new Database();
        $dbconn = $db->connect();
        $chatuser = new ChatUser($dbconn);

        // Create a Chat Data Class and saved the datas ---------------------

        $chatuser->chat_sender_id = $data['student_id'];
        $chatuser->chat_receiver_id = $data['chat_mate'];
        $chatuser->chat_user_message = $data['message'];
        $chatuser->chat_sender_image = $data['student_image'];
        $chatuser->chat_receiver_image = $data['chat_mate_image'];
        $chatuser->message_sender_fname = $data['student_fname'];
        $data['dt'] = date("F j, Y g:i a");
        $chatuser->chat_created = $data['dt'];
        $chatUserData = $chatuser->getData();

        $userDataName = $chatUserData['student_fname'];

        $chatuser->saveChat();

        foreach ($this->clients as $client) {
            // if ($from !== $client) {
            //     // The sender is not the receiver, send to each client connected
            //     $client->send($msg);
            // }

            if($from == $client){
                $data['from'] = 'Me';
            }else{
                $data['from'] = $userDataName;
            }

            $client->send(json_encode($data));

        }
    }

    public function onClose(ConnectionInterface $conn) {
        // The connection is closed, remove it, as we can no longer send it messages
        $this->clients->detach($conn);

        echo "Connection {$conn->resourceId} has disconnected\n";
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        echo "An error has occurred: {$e->getMessage()}\n";

        $conn->close();
    }
}