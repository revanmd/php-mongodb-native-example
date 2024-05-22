<?php
    require '../vendor/autoload.php';
    use MongoDB\Client;

    $client;

    //$MONGODB_HOST = 'localhost';
    $MONGODB_HOST = '192.168.1.7';

    try {
        $client = new Client('mongodb://'.$MONGODB_HOST.':27017');
        $database = $client->admin;

        $cursor = $database->command(['ping' => 1]);
        //var_dump($cursor->toArray()[0]);
    } catch (\Throwable $th) {
        echo $th;
    }
    



    