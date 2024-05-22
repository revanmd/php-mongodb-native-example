<?php
    require './connect.php';

    // Update many mengupdate semua field yang match dengan filter key yang dicari
    try {
        $database = $client->admin;
        $test = $database->test;


        // paramter pertama adalah field yang menjadi key untuk dicari
        // parameter kedua adalah field yang ingin diupdate
        $data = $test->updateMany(
            ['code'=>'UbrsMDyYQi'],
            [
                '$set'=>[
                    'tags' => ['Updated'],
                ]
            ]);
    } catch (\Throwable $th) {
        echo $th;
    }   