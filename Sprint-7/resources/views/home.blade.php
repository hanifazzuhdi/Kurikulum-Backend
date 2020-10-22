@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                <div class="card-body">

                    <ul class="list-group">
                        @if (session('status') )
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success !</strong> {{session('status')}} .
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        @endif

                        <h2 class="list-group-item active">Daftar Barang</h2>

                    @foreach ($product as $produk)
                        <li class="list-group-item">
                            {{$produk->namaBarang}}
                            <a href="/admin/{{$produk->slug}}" class="badge badge-info float-right">
                                Detail
                            </a>
                        </li>
                    @endforeach
                    </ul>

                    <div class="mt-3 d-flex justify-content-center">
                        {{$product->links()}}
                    </div>

                </div>
        </div>
    </div>
</div>
@endsection
