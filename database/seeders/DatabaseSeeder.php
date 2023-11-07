<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Category;
use App\Models\User;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();


        

        
        User::create([
            'name' => 'Fauzan',
            'username' => 'fauzan',
            'email' => 'fauzan@gmail.com',
            'password' => '12345'
        ]);

        
        Category::create([
            'name' => 'Fiksi',
            'slug' => 'fiksi'
        ]);

        Category::create([
            'name' => 'Non Fiksi',
            'slug' => 'non fiksi'
        ]);

        Book::create([
            'judul' => 'Malin Kundang',
            'pengarang' => 'Rini Kurniasih',
            'penerbit' => 'CV. Pustaka Setia',
            'description' => 'Cerita Malin Kundang mengisahkan tentang seorang anak muda yang durhaka kepada ibunya dan dihukum menjadi batu oleh Tuhan',
            'category_id' => '1',
            'user_id' => '1'
        ]);

        Book::create([
            'judul' => 'Perjalanan Ke Planet Merah',
            'pengarang' => 'John A. Smith',
            'penerbit' => 'National Geographic Books',
            'description' => 'Buku ini, ditulis oleh John A. Smith dan diterbitkan oleh National Geographic Books, mengisahkan perjalanan manusia dalam eksplorasi planet Mars.',
            'category_id' => '2',
            'user_id' => '1'
        ]);
        
    }
}
