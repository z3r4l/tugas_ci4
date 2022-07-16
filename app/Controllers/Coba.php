<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        //return view('welcome_message');
        echo "Ini controller coba";
    }

    public function about($namaku='', $umur='0')
    {
        //return view('welcome_message');
        echo "Nama saya $namaku. <br>";
        echo "Umur saya $umur.";
    }
}
