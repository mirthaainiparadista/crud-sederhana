@extends('Layouts')
  
@section('content')
<div class="container">
    <div class="row my-3 ">
        <div class="container mt-5">
            <h2 class="text-capitalize">{{ $book->name }}</h2>
            <a href="/" class="btn btn-success"><span data-feather='arrow-left'></span>Back To All My books</a>
            <a href="/edit/{{ $book->id }}" class="btn btn-warning"><span data-feather='edit'></span> Edit</a>
            <form action="/delete/{{ $book->id }}" method="post" class="d-inline">
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus buku?')">
                    <span data-feather='x-circle'></span> Delete
                </button>
            </form>
            <br><br>
            {{-- <img src="{{ asset('storage/'. $book->gambar) }}" style="width:30%"> --}}
            <h6 class="text-capitalize">Author: {{ $book->author }}</h6>
            <h6>Tahun: {{ $book->tahun }}</h6>
            <h6>Sinopsis: </h6>
            <p>{!! $book->sinopsis !!}</p>
            
        </div>
    </div>
</div>
{{-- <div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Book's Detail
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Judul: </b>{{ $book->name }}</li>
                    <li class="list-group-item"><b>Author: </b>{{ $book->author }}</li>
                    <li class="list-group-item"><b>Tahun: </b>{{ $book->tahun }}</li>
                    <li class="list-group-item"><b>Sinopsis: </b>{{ $book->sinopsis }}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="/">Kembali</a>
            
        </div>
    </div>
</div> --}}
@endsection