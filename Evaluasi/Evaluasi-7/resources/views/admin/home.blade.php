@extends('layouts.app')

@section('content')

{{-- {{dd($data)}} --}}

<div class="container">
    <div class="row justify-content-center">

        <div class="col-3 p-2 border kiri">
            <div class="jumbotron">
                <h1 class="text-center">Welcome</h1>
            </div>
            <ul class="list-group">
                <a href="/admin"><li class="list-group-item active">Daftar Berita</li></a>
                <a href="/admin/create"><li class="list-group-item">Tambah Berita</li></a>
                <a href="/admin/settings"><li class="list-group-item">Settings</li></a>
            </ul>
        </div>

        <div class="col p-3 border kanan">

            @if (session('status') )
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success !</strong> {{session('status')}} .
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
            @endif

            <div class="d-flex flex-md-wrap justify-content-md-around">

            @foreach ($data as $item)
            <div class="card kartu p-2">
                <h4 class="text-center mb-4">{{substr($item->judul_berita, 0, 30)}}...</h4>
                <p>Tag : {{$item->tag}}</p>
                <p>Author : {{$item->name}}</p>
                <a href="admin/{{$item->slug}}" class="mt-3 badge badge-info detail">Detail</a>
            </div>
            @endforeach

        </div>

        <div class="mt-5 ml-3">
            {{$data->links()}}
        </div>


    </div>
</div>
@endsection

