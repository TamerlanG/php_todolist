<?php 

$query = require 'core/bootstrap.php';

$users = App::get('database')->selectAll('users');

require 'views/index.view.php';