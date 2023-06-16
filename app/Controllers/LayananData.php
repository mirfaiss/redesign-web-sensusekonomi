<?php

namespace App\Controllers;

class LayananData extends BaseController
{
    public function index($content)
    {
        $data = [
            'title' => "SE 2016 | $content"
        ];
        // return view('welcome_message');
        return view('layanan-data/' . $content, $data);
    }

    public function tabelTopik($tabelTopik)
    {
        $content = view('layanan-data/tabelTopik' . $tabelTopik);

        $data = [
            'title' => "SE 2016 | Tabel Topik",
            'content' => $content,
        ];

        return view('layanan-data/tabelTopik', $data);
    }

    public function jumlahUsaha($jumlahUsaha)
    {
        $content = view('layanan-data/jumlahUsaha' . $jumlahUsaha);

        $data = [
            'title' => "SE 2016 | Jumlah Usaha Tenaga Kerja dan Balas Jasa",
            'content' => $content,
        ];

        return view('layanan-data/jumlahUsaha', $data);
    }

    public function tabel1($tabel1)
    {
        $content = view('layanan-data/tabel' . $tabel1);

        $data = [
            'title' => "SE 2016 | tabel1",
            'content' => $content,
        ];

        return view('layanan-data/tabel1', $tabel1);
    }


    public function tabel2($tabel2)
    {
        $content = view('layanan-data/tabel' . $tabel2);

        $data = [
            'title' => "SE 2016 | tabel1",
            'content' => $content,
        ];

        return view('layanan-data/tabel2', $tabel2);
    }
}
