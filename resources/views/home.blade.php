@extends('layout.master')

@section('title', 'Book Supplier')
@section('css')
<style>
    img {
        max-height: 300px;
        object-fit: cover;
    }
</style>
@endsection

@section('content')
<h1 class="text-center text-light py-4">Book List</h1>
<div class="row row-cols-1 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 g-4">
    @php( $books = App\Models\book::all() )
    @foreach ($books as $book)
    <div class="col">
        <div class="card h-100">
            <img src=" {{ $book->image }} " class="card-img-top img-fluid">
            <div class="card-body">
                <h5 class="card-title">{{ $book->title }}</h5>
                <p class="card-text"><small class="text-muted">{{ $book->author }}</small></p>
                <p class="card-text">{{ Str::limit($book->synopsis, 75)}}</p>
            </div>
            <div class="card-footer bg-white">
                <a href="/book_detail/{{ $book->id }}" class="btn btn-outline-primary">Detail</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection