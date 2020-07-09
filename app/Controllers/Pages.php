<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = ['tittle' => 'Home | Web Agung']; // judul tab per pages

        return view('pages/home', $data);
    }

    public function about()
    {
        $data = ['tittle' => 'About | Web Agung']; // judul tab per pages
        return view('pages/about', $data);
    }
    public function contact()
    {
        $data = [
            'tittle' => 'Contact | Web Agung',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Komplek Bumi Baleendah Asri Jelekong',
                    'kota' => 'Bandung'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Komplek Bumi Baleendah Asri ',
                    'kota' => 'Bandung'
                ]
            ]
        ]; // judul tab per pages

        return view('pages/contact', $data);
    }
    public function portofolio()
    {
        $data = ['tittle' => 'Portofolio | Web Agung']; // judul tab per pages
        return view('pages/portofolio', $data);
    }



    //--------------------------------------------------------------------

}
