@extends('layouts.main')

@section('title', $show->judul_berita)

@section('content')

{{-- {{dd($show)}} --}}

<div class="container berita">

    <main>
        <h2>{{$show->judul_berita}}</h2>

        <div class="author">
            <img src="https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" width="45px" height="45px" alt="Foto Profile">
            <p>{{$show->name}}</p>
            <span>{{$show->created_at}}</span>
        </div>

        <div class="deskripsi">
            <img src="/image/{{$show->thumbnail}}" width="600px" height="330px" alt="Gambar">
            <p>{{$show->deskripsi}}</p>
        </div>
    </main>

    <aside>
        <div class="topik">
            <h3>Topik Populer</h3>
            <ul>
                <li># RUU Cipta Kerja</li>
                <li># Banjir Jakarta</li>
                <li># Valentino Rossi</li>
                <li># Covid-19</li>
            </ul>
        </div>

        <div class="side">
            <h3>Berita Terkini</h3>

            <div class="utama">
                <img src="/image/{{$berita[0]->thumbnail}}"  width="100%" height="180px" alt="thumbnail">
                <a href="/pages/{{$berita[0]->slug}}">
                    <h5> {{$berita[0]->judul_berita}} </h5>
                </a>
            </div>

            <ul>
                <?php for ($i = 1; $i < 4; $i++) : ?>
                    <li>
                        <div class="list">
                            <img src="/image/{{$berita[$i]->thumbnail}}" width="70px" height="65px" alt="">
                            <p class="cat">{{$berita[$i]->tag}}</p>
                            <a href="/pages/{{$berita[$i]->slug}}">
                                <h5>{{$berita[$i]->judul_berita}}</h5>
                            </a>
                        </div>
                    </li>
                <?php endfor ?>
                <li class="show">
                    <a href=""> Show More </a>
                </li>
            </ul>
        </div>

    </aside>

</div>

@endsection
