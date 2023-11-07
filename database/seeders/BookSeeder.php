<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            'judul' => 'Malin Kundang',
            'pengarang' => 'Rini Kurniasih',
            'penerbit' => 'CV. Pustaka Setia',
            'kategori' => 'Fiksi',
            'description' => 'Cerita Malin Kundang mengisahkan tentang seorang anak muda yang durhaka kepada ibunya dan dihukum menjadi batu oleh Tuhan'
        ]);
    }
}
