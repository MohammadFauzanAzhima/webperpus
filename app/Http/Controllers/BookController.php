<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getBuku()
    {
        $data = Book::all();
        $title = 'Buku';
        return view('buku', compact('title'), compact('data'));
    }

    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Buku";
        return view('tambahbuku', compact('title'));
    }


    public function insert(Request $request)
    {
        //dd($request->all());
        Book::create($request->all());
        return redirect()->route('buku')->with('success', 'Data Buku berhasil ditambahkan');
    }


    public function tampilkandata($id){

        $data = Book::find($id);
        //dd($data);

        return view('tampilkandata', compact('book'));
    }

    public function delete($id){

        $data = Book::find($id);
        $data->delete();
        return redirect()->route('buku')->with('success', 'Data Buku berhasil dihapus');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
