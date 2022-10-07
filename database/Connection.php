<?php


class Connection 
{

    // static means you don't have to instantiate the class, so you can use the function like this
    // Connection::make()
    public static function make($config)
    {

        try {

            return new PDO
            (

                $config['connection'] . $config['dbname'],
                $config['username'],
                $config['password'],
                $config['options']

            );

        } catch (PDOException $e) {

            die($e->getMessage());

        }

    }

}