<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function berandaBackend()
    {
        return view('backend.beranda.index', [
            'judul' => 'Halaman Beranda',
            ]);
    }
}
