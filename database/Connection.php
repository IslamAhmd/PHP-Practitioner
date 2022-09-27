<?php


class Connection 
{

    // static means you don't have to instantiate the class, so you can use the function like this
    // Connection::make()
    public static function make()
    {

        try {

            return new PDO('mysql:host=localhost;dbname=PHP-Practitioner;', 'root', '51215');

        } catch (PDOException $e) {

            die($e->getMessage());

        }

    }

}