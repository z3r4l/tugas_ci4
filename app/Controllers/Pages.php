<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Programing Ibnu Sina',
        ];
        //echo view('layout/header', $data);
        //echo view('pages/home');
        //echo view('layout/footer');
        return view('pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About | Programing Ibnu Sina'
        ];

        return view('pages/about', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact | Programing Ibnu Sina',
            'contact' => [
                [
                    'facebook'  => 'Zery Aldi',
                    'instagram' => 'Zery Aldi',
                    'whatsapp'  => '+62895385165778'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
