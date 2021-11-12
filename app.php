<?php

use Ratchet\MessageComponentInterface;  
use Ratchet\ConnectionInterface;
use MyApp\Socket;

require dirname( __FILE__ ) . '/vendor/autoload.php';

$app = new Ratchet\App("https://ws.adielseffr.in", 80, '0.0.0.0', $loop);
$app->route('/chat', new Socket, array('*'));

$app->run();
