<?php

require 'functions.php';

class Task {

    public $title;
    
    public $description;

    public $completed = false;

    public function __construct($title, $description)
    {
        
        $this->title = $title;

        $this->description = $description;

    }

    public function completeTask()
    {

        $this->completed = true;

    }

    public function isCompleted()
    {
        
        return $this->completed;

    }

}

$tasks = [

    new Task('work', 'finish work'),

    new Task('home work', 'finish home work'),

    new Task('break', 'take a break'),

];

$tasks[0]->completeTask();

require 'index.view.php';