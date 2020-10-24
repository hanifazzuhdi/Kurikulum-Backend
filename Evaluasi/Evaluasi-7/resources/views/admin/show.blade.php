@extends('layouts.app')

@section('content')

<div class="container d-flex justify-content-center">

    <div class="card card_show" style="width: 25rem;">

        <img class="card-img-top" src="/image/{{$berita->thumbnail}}" alt="Card image cap">

        <div class="card-body">
            <h5 class="card-title">{{$berita->judul_berita}}</h5>
            <p class="card-text">{{ substr($berita->deskripsi, 0, 150) }}...</p>

            <a href="/admin/{{$berita->id}}/edit" class="btn btn-warning float-left mr-2">Edit</a>
            <form action="/admin/{{$berita->id}}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger" onclick="return confirm ('Yakin ?')" type="submit">Delete</button>
            </form>
            <a href="/admin" class="badge badge-info float-right mt-1 p-1"> << Kembali</a>
        </div>

    </div>
</div>

@endsection
