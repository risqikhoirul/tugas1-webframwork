<?php

namespace App\Controllers;

class PinjamBuku extends BaseController
{
    public function index(): string
    {
        $data = [
            'title'=> 'Pinjam Buku',
        ];
        return view('pinjambuku', $data);
    }
}
