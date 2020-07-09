<?php

namespace App\Controllers;

class Akun extends BaseController
{
    public function admin()
    {
        $data = [
            'tittle' => 'Login Admin'
        ];

        return view('akun/admin', $data);
    }

    public function user()
    {
        $data = [
            'tittle' => 'Login User'
        ];

        return view('akun/user', $data);
    }
}
