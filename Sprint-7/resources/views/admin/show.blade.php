@extends('layouts.app')

@section('title', 'Detail Produk')

@section('content')

<div class="container mt-5">

    <div class="card" style="width: 18rem;">
        <div class="card-body">

          <h5 class="card-title">{{$product->namaBarang}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">Rp. {{$product->hargaBarang}}</h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

          <a href="/admin/{{$product->id}}/edit" class="btn btn-warning mr-1 btn-sm float-left">Edit</a>

          <form action="/admin/{{$product->id}}" method="post">
            @csrf
            @method('delete')
            <button type="submit" onclick="return confirm ('Yakin ?')" class="btn btn-danger btn-sm">Delete</button>
          </form>

        </div>
      </div>

</div>

@endsection
