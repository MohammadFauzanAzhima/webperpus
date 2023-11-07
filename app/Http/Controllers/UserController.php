<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function getAnggota()
    {
        return view('anggota', [
            "title" => "Anggota",
        ]);
    }

    public function getAdmin()
    {
        return view('admin', [
            "title" => "Admin",
        ]);
    }
}
