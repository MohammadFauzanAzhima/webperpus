<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'peminjamans';
    protected $fillable = ['namauser','namabuku','kategori', 'status'];

    public function historiPeminjaman()
    {
        return $this->hasMany(HistoryPeminjaman::class, 'peminjaman_id');
    }
}
