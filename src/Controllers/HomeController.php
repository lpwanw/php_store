<?php

namespace App\Controllers;

class HomeController
{
    public function index()
    {
        $data = [
            'pageTitle' => 'Welcome Home'
        ];

        view('home', $data);
    }
}
