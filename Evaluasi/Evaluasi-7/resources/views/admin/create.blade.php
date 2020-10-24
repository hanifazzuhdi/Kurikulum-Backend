@extends('layouts.app')

@section ('tambah', 'active')

@section('content')

{{-- {{dd($user)}} --}}

<div class="container">
    <div class="row justify-content-center">

        <div class="col-3 p-2 border kiri">
            <div class="jumbotron">
                <h1 class="text-center">Welcome</h1>
            </div>
            <ul class="list-group">
                <a href="/admin"><li class="list-group-item">Daftar Berita</li></a>
                <a href="/admin/create"><li class="list-group-item @yield('tambah')">Tambah Berita</li></a>
                <a href="/admin/settings"><li class="list-group-item">Settings</li></a>
            </ul>
        </div>

        <div class="col p-3 d-flex flex-md-wrap border kanan">
            <form action="/admin/store" method="post" enctype="multipart/form-data">
                @csrf

                <h3 class="text-center mb-4">Form Tambah Berita</h3>

                <div class="form-group">
                    <label for="judul_berita">Judul Berita : </label>
                    <br>
                    <input type="text" name="judul_berita" class="@error('judul_berita') is-invalid @enderror" id="judul_berita">
                </div>
                @error('judul_berita')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="tag">Kategori : </label>
                    <br>
                    <select name="id_tag" id="tag">
                        @foreach ($tag as $item)
                        <option value="{{$item->id}}">{{$item->tag}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi : </label>
                    <br>
                    <textarea name="deskripsi" class="@error('deskripsi') is-invalid @enderror" id="deskripsi" cols="70" rows="8"></textarea>
                </div>
                @error('deskripsi')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="thumbnail">Thumbnail : </label>
                    <input type="file" name="thumbnail" id="thumbnail">
                </div>

                <div class="form-group">
                    <label for="author">Author</label>

                    <select name="id_user" id="id_user">
                        @foreach ($user as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <button class="mt-2 btn btn-primary" type="submit">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
