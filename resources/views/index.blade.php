@extends('layouts')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>CRUD - Manajemen Data Buku Perpustakaan</h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="/create"> Create New Book</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-striped table-sm">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Author</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->name }}</td>
            <td>{{ $book->author }}</td>
            <td>
                <form action="/delete/{{ $book->id }}" method="POST">
   
                    <a class="btn btn-info" href="/show/{{ $book->id }}">Show</a>
    
                    <a class="btn btn-primary" href="/edit/{{ $book->id }}">Edit</a>
   
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus buku?')">
                        <span data-feather='x-circle'></span> Delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="text-center">
        {{-- {!! $books->links() !!} --}}
    </div>
      
@endsection