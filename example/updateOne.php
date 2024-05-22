<?php
    require './connect.php';

    try {
        $database = $client->admin;
        $test = $database->test;


        // paramter pertama adalah field yang menjadi key untuk dicari
        // parameter kedua adalah field yang ingin diupdate
        $data = $test->updateOne(
            ['code'=>'UbrsMDyYQi'],
            [
                '$set'=>[
                    'tags' => ['Updated'],
                ]
            ]);
    } catch (\Throwable $th) {
        echo $th;
    }   