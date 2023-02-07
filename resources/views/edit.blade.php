@extends('layouts')
  
@section('content')
   
<div class="container mt-5">
   
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Ubah Data Buku
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="/edit/{{ $book->id }}" id="myForm" enctype="multipart/form-data">
            
            @csrf
                <div class="form-group">
                    <label for="name">Name</label>                    
                    <input type="text" name="name" class="form-control" id="name" value="{{ $book->name }}" aria-describedby="name" >                
                </div>
                <div class="form-group">
                    <label for="author">Author</label>                    
                    <input type="author" name="author" class="form-control" id="author" value="{{ $book->author }}"aria-describedby="author" >                
                </div>
                <div class="form-group">
                    <label for="tahun">Tahun</label>                    
                    <input type="tahun" name="tahun" class="form-control" id="tahun" value="{{ $book->tahun }}"aria-describedby="tahun" >                
                </div>
                <div class="form-group">
                    <label for="sinopsis">Sinopsis</label>                    
                    <input type="sinopsis" name="sinopsis" class="form-control" id="sinopsis" value="{{ $book->sinopsis }}" aria-describedby="sinopsis" >                
                </div>
            <a href="/" class="btn btn-success"><span data-feather='arrow-left'></span>Back To All My books</a>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
    </div>
@endsection