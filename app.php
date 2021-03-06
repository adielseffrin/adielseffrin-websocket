<?php

use Ratchet\MessageComponentInterface;  
use Ratchet\ConnectionInterface;
use MyApp\Socket;

require dirname( __FILE__ ) . '/vendor/autoload.php';
$httpHost = "ws.adielseffr.in";
$app = new Ratchet\App($httpHost, 443, '0.0.0.0', $loop);
$app->route('/pizza', new Socket, array('*'));

$app->run();
