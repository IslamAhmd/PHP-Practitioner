<?php

function connectToDB()
{

    try {

        return new PDO('mysql:host=localhost;dbname=PHP-Practitioner;', 'root', '51215');

    } catch (PDOException $e) {

        die($e->getMessage());

    }

}

function fetchAll($pdo)
{

    $statement = $pdo->prepare('select * from todo');

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task'); // pass 

}


function dd($data){
    
    echo "<pre>";

    die(var_dump($data));

    echo "</pre>";

}