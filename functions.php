<?php

function checkAge(int $age): bool
{
    return $age > 21;
}

function dd($data){
    
    echo "<pre>";

    die(var_dump($data));

    echo "</pre>";

}