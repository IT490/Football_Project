<?php

require __DIR__ . '/vendor/autoload.php';

use PhpAmqpLib\Connection\AMQPLazyConnection;
use Thumper\ConnectionRegistry;


$json = file_get_contents(__DIR__ . '/ServerConfig.json');
$arr = json_decode($json, true);

$connections = array(
    'default' => new AMQPLazyConnection($arr["M"], 5672, 'demo', 'demo')
  );

$registry = new ConnectionRegistry($connections, 'default');

