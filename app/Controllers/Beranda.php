<?php

namespace App\Controllers;

class Beranda extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'SE2016 | Beranda'
        ];
        return view('beranda', $data);
    }

}
