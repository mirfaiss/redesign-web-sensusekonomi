<?php

namespace App\Controllers;

class Tentang extends BaseController
{
    public function index($content)
    {
        $data = [
            'title' => "SE 2016 | $content",
            'navtitle' => 'TENTANG SE2016'
        ];
        // return view('welcome_message');
        return view('tentang-se/' . $content, $data);
    }

    public function metadata($metadata)
    {
        $content = view('tentang-se/metadata/' . $metadata);

        $data = [
            'title' => "SE 2016 | Metadata",
            'content' => $content,
            'navtitle' => 'TENTANG SE2016'
        ];

        return view('tentang-se/metadata', $data);
    }
}
