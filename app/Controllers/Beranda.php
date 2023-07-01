<?php

namespace App\Controllers;

class Beranda extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'SE2016 | Beranda',
            'navtitle' => 'BERANDA'
        ];
        return view('beranda', $data);
    }

    public function perbandinganWilayah()
    {
        $data = [
            'title' => 'Perbandingan Wilayah | SE2016',
            'navtitle' => 'LAYANAN DATA'
        ];

        return view('perbandingan-wilayah/perbandingan-wilayah', $data);
    }
}
