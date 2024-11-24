<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
    ->withServiceAccount('sagip-siklab-firebase-adminsdk-dc384-72a5ca5129.json')
    ->withDatabaseUri('https://sagip-siklab-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();

?>