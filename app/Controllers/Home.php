<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function about(): string
    {
        return view('Pages/about');
    }
    public function contact(): string
    {
        return view('Pages/contact');
    }
    public function signup(): string
    {
        return view('Pages/signup');
    }

    public function login(): string
    {
        return view('Pages/login');
    }
    public function dashboard(): string
    {
        return view('Pages/dashboard');
    }
}
