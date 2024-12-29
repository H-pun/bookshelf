@extends('layout.master')

@section('title', 'Book Publisher')
@section('css')
<style>
    img {
        max-height: 300px;
        object-fit: cover;
    }
</style>
@endsection

@section('content')
<h1 class="text-center text-light pt-3">Publisher</h1>
@php( $publishers = App\Models\publisher::all() )
@foreach ($publishers as $publisher)
<div class="card my-4">
    <div class="row">
        <div class="col-md-4 d-flex align-items-center justify-content-center">
            <img class="img-fluid" src="{{ $publisher->image }}" style="max-width: 300px;">
        </div>
        <div class="col-md-8 text-light">
            <ul class="list-group list-group-flush lead">
                <li class="list-group-item my-1 mt-1">
                    <span class="fw-bold ">Publisher Name:</span>
                    {{ $publisher->name }}
                </li>
                <li class="list-group-item my-1">
                    <span class="fw-bold ">Address:</span>
                    {{ $publisher->address }}
                </li>
                <li class="list-group-item my-1">
                    <span class="fw-bold ">Phone:</span>
                    {{ $publisher->phone }}
                </li>
                <li class="list-group-item my-1">
                    <span class="fw-bold ">email:</span>
                    {{ $publisher->email }}
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="row row-cols-1 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 g-4">
    @php( $books = App\Models\book::where('publisher_id', $publisher->id)->get() )
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
@endforeach
@endsection