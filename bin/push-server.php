<?php
    require dirname(__DIR__) . '/vendor/autoload.php';

use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use MyApp\Pusher;

    $server = IoServer::factory(
        new HttpServer(
            new WsServer(
                new Pusher()
            )
        ),
        8080
    );

    $server->run();