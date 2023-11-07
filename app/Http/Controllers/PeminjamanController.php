<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;

use App\Http\Requests\StorePeminjamanRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PeminjamanController extends Controller
{
    public function index()
    {
        return view('peminjaman', [
            "title" => 'Peminjaman',
            "data" => Peminjaman::all()
            
        ]);
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'namauser' => 'required',
        'namabuku' => 'required',
        'kategori' => 'required',
        
    ]);

    Peminjaman::create($validated);
        return redirect()->back()->with('success', "Buku {$request->judul} telah ditambahkan");
}


    public function update(Request $request, $id)
    {
        $peminjaman = Peminjaman::findOrFail($id);

        if ($request->has('accept')) {
            $peminjaman->update(['status' => 'Sudah Dikembalikan']);
            
        } elseif ($request->has('reject')) {
            $peminjaman->update(['status' => 'Belum Dikembalikan']);
        }
        

        return redirect()->route('peminjaman.index');
    }
    
/*
public function accept(Request $request, Peminjaman $peminjaman)
    {
        
        $peminjaman->accept($request->all());

        return redirect()->back()->with('success', 'Peminjaman '.$request->nameuser.' telah dikembalikan');
    }
    */
}
