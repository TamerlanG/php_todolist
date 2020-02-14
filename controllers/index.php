<?php 

require 'core/Task.php';

$query = require 'core/bootstrap.php';

$tasks = $app['database']->selectAll('todos', 'Task');

require 'views/index.view.php';