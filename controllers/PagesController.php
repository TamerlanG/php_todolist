<?php 


class PagesController {

    public function home(){
        require 'core/bootstrap.php';

        return view('index');
    }


    public function about(){
        require 'core/bootstrap.php';

        return view('about');
    }

    public function contact(){
        require 'core/bootstrap.php';
        return view('contact');
    }

}