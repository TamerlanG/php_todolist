<?php


$query = require 'core/bootstrap.php';

$app['database']->addTodo($_POST['title'], 'todos');

header("Location: /");
exit;
