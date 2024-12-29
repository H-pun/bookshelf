@extends('layout.master')

@section('title', 'Book Detail')
@section('css')
<style>
    img {
        max-width: 250px;
        object-fit: cover;
    }
</style>
@endsection

@section('content')
<div class="text-light mt-3">

    <h1 class="text-center border-bottom text-light py-3">Book Detail</h1>
    <div class="row g-4 pt-4">
        <div class="col-md-4 d-flex align-items-center justify-content-center">
            <img class="shadow rounded" src="{{ $book->image }}">
        </div>
        <div class="col-md-8">
            <h3><strong>{{ $book->title }}</strong></h1>
                <p class="text-secondary">By: {{ $book->author }}</p>
                <div class="row">
                    <div class="col-md-6">
                        <h5 style="opacity:80%;">Tahun</h6>
                            <h5>{{ $book->year }}</h5>
                    </div>
                    <div class="col-md-6">
                        <h5 style="opacity:80%;">Penerbit</h6>
                            <h5>{{ $book->publisher }}</h5>
                    </div>
                </div>
                <br>
                <h5 style="opacity:80%;">Sinopsis</h5>
                <p style="text-align: justify;">{{ $book->synopsis }}</p>
        </div>
    </div>
</div>
@endsection