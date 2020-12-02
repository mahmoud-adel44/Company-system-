


<?php

session_start();
require_once 'classes/Task.php';

// $task_id = $_GET['task_id'];

$task = new Task;

$tasks = $task->getAll(2);

var_dump($tasks);
die();

?>