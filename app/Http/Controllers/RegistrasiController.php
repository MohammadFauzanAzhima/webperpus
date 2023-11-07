<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrasiController extends Controller
{
    public function registrasi()
    {
        return view('registrasi', [
            'title' => 'Registrasi',
        ]);
    }

    public function store()
    {
        return request()->all();
    }
}
