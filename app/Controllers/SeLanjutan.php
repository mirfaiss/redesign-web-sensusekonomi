<?php

namespace App\Controllers;

class SeLanjutan extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'SE2016 | SE2016 Lanjutan'
        ];
        return view('se-lanjutan/se2016-lanjutan', $data);
    }

}
