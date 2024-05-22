<?php
    require './connect.php';

    try {
        $database = $client->admin;
        $test = $database->test;

        function generateRandomString($length = 10) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }

        function generateRandomNumber($length = 100){
            return rand(1, $length);
        }

        $insertOneResult = $test->insertOne([
            'code' => generateRandomString(10),
            'tags' => ['Tags'],
            'specs' => [
                'a' => generateRandomNumber(100), 
                'b' => generateRandomNumber(10), 
                'c' => 'Others'
            ],
        ]);
        
        echo "Inserted ID: " . $insertOneResult->getInsertedId() . "\n";
    } catch (\Throwable $th) {
        echo $th;
    }   