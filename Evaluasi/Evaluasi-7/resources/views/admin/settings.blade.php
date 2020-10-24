@extends('layouts.app')

@section('daftar', 'active')

@section('content')

{{-- {{dd($data)}} --}}


<div class="container">
    <div class="row justify-content-center">

        <div class="col-3 p-2 border kiri">
            <div class="jumbotron">
                <h1 class="text-center">Welcome</h1>
            </div>
            <ul class="list-group">
                <a href="/admin"><li class="list-group-item">Daftar Berita</li></a>
                <a href="/admin/create"><li class="list-group-item">Tambah Berita</li></a>
                <a href="/admin/settings"><li class="list-group-item active">Settings</li></a>
            </ul>
        </div>

        <div class="col p-3 border kanan">

            <h1 class="text-center">Settings</h1>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#tambahTag">
                Tambah Tag Berita
            </button>

            <!-- Modal -->
            <div class="modal fade" id="tambahTag" tabindex="-1" role="dialog" aria-labelledby="judul" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="judul">Tambah Tag</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>

                    <div class="modal-body">
                        <form action="tambahTag" method="post">
                            @csrf
                            <h3>Under Construct !</h3>
                            <label>Nama Tag Baru : </label>
                            <br>
                            <input type="text" name="tagBaru" id="tagBaru">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection

