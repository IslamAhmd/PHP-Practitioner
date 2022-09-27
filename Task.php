<?php

class Task {

    public $title;
    
    public $description;

    public $completed;

    public function completeTask()
    {

        $this->completed = true;

    }

    public function isCompleted()
    {
        
        return $this->completed;

    }

}