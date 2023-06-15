<?php

namespace App\Controllers;

class Beranda extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Beranda | SE2016'
        ];
        return view('beranda', $data);
    }

    public function perbandinganWilayah()
    {
        $data = [
            'title' => 'Perbandingan Wilayah | SE2016'
        ];

        return view('perbandingan-wilayah/perbandingan-wilayah', $data);
    }
}
