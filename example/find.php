<?php
    require './connect.php';

    try {
        $database = $client->admin;
        $test = $database->test;

        $data = $test.find();
    } catch (\Throwable $th) {
        echo $th;
    }   