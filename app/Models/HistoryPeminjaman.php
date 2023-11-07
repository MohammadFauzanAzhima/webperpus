<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryPeminjaman extends Model
{
    
    //protected $table = 'histori_peminjaman'; // Nama tabel histori_peminjaman
    
    protected $fillable = [
        'peminjaman_id',
        'namauser',
        'namabuku',
        'kategori',
        'status',
    ];

    public function peminjaman()
    {
        return $this->belongsTo(Peminjaman::class, 'peminjaman_id');
    }
    
    
}
