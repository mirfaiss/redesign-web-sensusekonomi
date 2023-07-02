<?php

namespace App\Controllers;

class SeLanjutan extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'SE2016 | SE2016 Lanjutan',
            'navtitle' => 'SE2016 LANJUTAN'
        ];
        return view('se-lanjutan/se2016-lanjutan', $data);
    }
    
    public function suratdukungan()
    {
        $data = [
            'title' => 'SE2016 | SE2016 Lanjutan',
            'navtitle' => 'SE2016 LANJUTAN'
        ];
        return view('se-lanjutan/surat-dukungan', $data);
    }

}
