<?php

require 'core/Router.php';
require 'core/Requests.php';


require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());
