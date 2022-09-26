<?php

require 'functions.php';

require 'task.php';

$pdo = connectToDB();

$tasks = fetchAll($pdo);

$tasks[1]->completeTask();

require 'index.view.php';