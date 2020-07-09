<?php

namespace App\Controllers;

class Pengalaman extends BaseController

{
    public function index()
    {
        $data = [
            'tittle' => 'Pengalaman'

        ];
        return view('pengalaman/pengalaman', $data);
    }
}
