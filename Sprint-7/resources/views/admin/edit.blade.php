@extends('layouts.app')

@section('title', 'Update Data Barang')

@section('content')

<div class="container mt-4">

    <h2>Form Update Data Barang</h2>

    <form class="col-7 my-4" action="/admin/{{$product->id}}" method="post">
        @csrf
        @method('put')

        <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" class="form-control @error('namaBarang') is-invalid @enderror" name="namaBarang" value="{{old('namaBarang') ? old('namaBarang') : $product->namaBarang }}">
            @error('namaBarang')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Harga Barang</label>
            <input type="text" class="form-control @error('hargaBarang') is-invalid @enderror" name="hargaBarang" value="{{$product->hargaBarang}}">
            @error('hargaBarang')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Ubah Data!</button>
        </div>
    </form>

</div>

@endsection
