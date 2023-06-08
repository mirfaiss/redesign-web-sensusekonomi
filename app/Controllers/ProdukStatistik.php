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

    // public function publikasi($publikasi)
    // {
    //     $content = view('produk-statistik/publikasi/' . $publikasi);

    //     $data = [
    //         'title' => "SE 2016 | Metadata",
    //         'content' => $content,
    //     ];

    //     return view('produk-statistik/publikasi', $data);
    // }
}