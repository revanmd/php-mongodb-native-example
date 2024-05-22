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

        

        $insertManyResult = $test->insertMany(
           [
                [
                    'code' => generateRandomString(10),
                    'tags' => ['Tags'],
                    'specs' => [
                        'a' => generateRandomNumber(100), 
                        'b' => generateRandomNumber(10), 
                        'c' => 'Others'
                    ],
                ],
                [
                    'code' => generateRandomString(10),
                    'tags' => ['Tags'],
                    'specs' => [
                        'a' => generateRandomNumber(100), 
                        'b' => generateRandomNumber(10), 
                        'c' => 'Others'
                    ],
                ],
                [
                    'code' => generateRandomString(10),
                    'tags' => ['Tags'],
                    'specs' => [
                        'a' => generateRandomNumber(100), 
                        'b' => generateRandomNumber(10), 
                        'c' => 'Others'
                    ],
                ],
           ]
        );
        
        $insertedIds = $insertManyResult->getInsertedIds();

        // Output the inserted IDs
        foreach ($insertedIds as $id) {
            echo "Inserted IDs: ";
            echo $id . "<br>";
        }
    } catch (\Throwable $th) {
        echo $th;
    }   