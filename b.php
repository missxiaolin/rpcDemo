<?php

$client = new Yar_Client('http://localhost/rpc/a.php');

$res = $client->Hello('a');

var_dump($res);