<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    //
    public function index()
    {
        return view("index",[
            "books"=>Books::all(),
        ]);
    }

    public function create()
    {
        return view("create",[
            
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'author' => 'required',
            'tahun' => 'required',
            'sinopsis' => 'required',
        ]);

        //fungsi eloquent untuk menambah data
        Books::create($request->all());

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect('/')->with('success','Produk Berhasil Ditambahkan');
    }

    public function show($id)
    {
        $book = Books::find($id);
        return view('detail', ["book"=>$book]);
    }
}
