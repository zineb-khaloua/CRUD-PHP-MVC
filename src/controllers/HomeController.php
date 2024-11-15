<?php

namespace App\Controllers;

class HomeController{

    public function showHomePage(){

        return include_once VIEWS . 'home.php';
    }

    public function notFound() {
        include __DIR__ . '/../Helpers/404.php';
    }
    
   
}

