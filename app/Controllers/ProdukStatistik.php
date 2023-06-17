<?php

namespace App\Controllers;

class ProdukStatistik extends BaseController
{
    public function index($content)
    {
        $data = [
            'title' => "SE 2016 | $content"
        ];
        // return view('welcome_message');
        return view('produk-statistik/' . $content, $data);
    }

    public function dokumen($dokumen)
    {
        $content = view('produk-statistik/dokumen/' . $dokumen);

        $data = [
            'title' => "SE 2016 | Dokumen",
            'content' => $content,
        ];

        return view('produk-statistik/dokumen', $data);
    }

    public function publikasi($publikasi)
    {
        $content = view('produk-statistik/publikasi/' . $publikasi);

        $data = [
            'title' => "SE 2016 | Publikasi",
            'content' => $content,
        ];

        return view('produk-statistik/publikasi', $data);
    }

    public function infografis($infografis)
    {
        $content = view('produk-statistik/infografis/' . $infografis);

        $data = [
            'title' => "SE 2016 | infografis",
            'content' => $content,
        ];

        return view('produk-statistik/infografis', $data);
    }
}