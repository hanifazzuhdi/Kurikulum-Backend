@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">

        <div class="col-3 p-2 border kiri">
            <div class="jumbotron">
                <h1 class="text-center">Welcome</h1>
            </div>
            <ul class="list-group">
                <a href="/admin"><li class="list-group-item">Daftar Berita</li></a>
                <a href="/admin/create"><li class="list-group-item">Tambah Berita</li></a>
                <a href="/admin/settings"><li class="list-group-item">Settings</li></a>
            </ul>
        </div>

        <div class="col p-3 d-flex flex-md-wrap border kanan">
            <form action="/admin/{{$berita->id}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')

                <h3 class="text-center mb-4">Form Ubah Berita</h3>

                <div class="form-group">
                    <label for="judul_berita">Judul Berita : </label>
                    <br>
                    <input type="text" name="judul_berita" class="@error('judul_berita') is-invalid @enderror" id="judul_berita" value="{{old('judul_berita') ? old('judul_berita') : $berita->judul_berita }}">
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
                    <textarea name="deskripsi" class="@error('deskripsi') is-invalid @enderror" id="deskripsi" cols="70" rows="8">{{old('deskripsi') ? old('deskripsi') : $berita->deskripsi }}</textarea>
                </div>
                @error('deskripsi')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="thumbnail">Thumbnail : </label>
                    <input type="file" name="thumbnail" id="thumbnail">
                </div>

                <div>
                    <button class="btn btn-primary mt-2" type="submit">Ubah</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
