<?php

namespace App\Controllers;

class KategoriBuku extends BaseController
{
    public function index(): string
    {
        $data = [
            'title'=> 'Kategori Buku',
        ];
        return view('kategoribuku', $data);
    }
}
