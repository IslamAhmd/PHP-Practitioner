<?php

require 'functions.php';

$names = ['islam', 'ahmed', 'khaled', 'mohsen', 'saad'];
$task = [
    'title' => 'finish work',
    'due' => 'today',
    'assigned_to' => 'islam',
    'completed' => false
];

echo checkAge(22)? (1==2?'allowed' : 'not allowed') : 'not allowed';
// require 'index.view.php';