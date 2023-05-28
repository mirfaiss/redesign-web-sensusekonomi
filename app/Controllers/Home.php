<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Coba'
        ];
        // return view('welcome_message');
        return view('coba', $data);
    }

}
