<!-- resources/views/books/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tambah Buku Baru</h2>
        <form action="{{ route('books.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Judul Buku</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="published_year">Harga Buku</label>
                <input type="number" name="published_year" id="published_year" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="author">Tanggal pembelian</label>
                <input type="date" name="author" id="author" class="form-control" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Tambah Buku</button>
        </form>
    </div>
@endsection
