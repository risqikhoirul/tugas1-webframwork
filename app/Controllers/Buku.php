<?php

namespace App\Controllers;

class Buku extends BaseController
{

    public function index(): string
    {
        $data = [
            'title'=> 'Buku',
        ];
        return view('buku', $data);
    }
}
