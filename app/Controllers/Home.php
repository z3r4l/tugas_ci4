<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('tentangsaya');
        //$data=[
        //    'judul_halaman'=> 'Tentang Saya'
        //];
        //echo view('layout/header' , $data);
       // echo view('pages/about' );
        //echo view('layout/footer');
        //cho "default";
        //echo "Hello world";
    }

    
    public function konten()
    {
        $data=[
            'judul_halaman'=> 'hubungi Kami',
            'tipe'=> 'Handphone',
            'alamat' => 'Sagulung',
            'email'=> 'dosen@uis.ac.id'
        ];
        echo view('tesmulti/kepala',$data);
        echo view('tesmulti/konten');
        echo view('tesmulti/kaki');
    }

    public function contact()
    {
        $data=[
            'judul_halaman'=> 'hubungi Kami',
            'tipe'=> 'Handphone',
            'alamat' => 'Sagulung',
            'email'=> 'dosen@uis.ac.id'
        ];
        echo view('layout/header' , $data);
        echo view('pages/contack');
        echo view('layout/footer');
    }
}
