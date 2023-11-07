<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;

class HistoryPeminjamanController extends Controller
{
    public function index()
    {
        return view('history_peminjaman', [
            "title" => 'histoyPeminjaman',
            'peminjaman' => Peminjaman::all(),
        ]);
    }
}
