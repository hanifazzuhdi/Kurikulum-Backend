@extends('layouts.app')

@section('title', 'Tambah Barang Baru')

@section('content')

<div class="container mt-4">

    <h2>Form Tambah Barang Baru</h2>

    <form class="col-7 my-4" action="/admin" method="post">
        @csrf

        <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" class="form-control @error('namaBarang') is-invalid @enderror" name="namaBarang" value="{{old('namaBarang')}}">

            @error('namaBarang')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="form-group">
             <label>Harga Barang</label>
             <input type="text" class="form-control @error('hargaBarang') is-invalid @enderror" name="hargaBarang">

             @error('hargaBarang')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
             @enderror
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Tambah Data!</button>
        </div>
    </form>

</div>

@endsection
