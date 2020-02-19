<?php

namespace App\Controllers;

use App\Core\App;

class UsersController {
    public function index(){
        require 'core/bootstrap.php';

        $users = App::get('database')->selectAll('users');

        return view('users', [
            'users' => $users
        ]);
    }

    public function store(){
        $query = require 'core/bootstrap.php';

        App::get('database')->insert('users', [
            'name' => $_POST['name']
        ]);
        
        return redirect('users');    
    }
}