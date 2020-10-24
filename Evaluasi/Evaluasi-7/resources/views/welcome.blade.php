@extends('layouts.main')

@section('title', 'Endonewsia | Berita Terkini, Kabar Terbaru - Terupdate')

@section('content')

{{-- {{dd($berita)}} --}}

<div class="container">

    <main>
        <h3>Berita Utama</h3>

        <div class="content">
            <img src="/image/{{$berita[0]->thumbnail}}" alt="Thumbnail Berita" width="630px" height="350px">
            <a href="/pages/{{$berita[0]->slug}}">
                <h2>{{$berita[0]->judul_berita}}</h2>
            </a>
            <p>{{substr($berita[0]->deskripsi, 0, 200)}}... <a class="lengkap" href="/pages/{{$berita[0]->slug}}"> Baca Selengkapnya </a></p>
        </div>

        <h4>Berita Utama Lainnya</h4>

        <div class="more">
            <?php for ($i = 1; $i <= 3; $i++) : ?>
                <div class="card">

                    <img src="/image/{{$berita[$i]->thumbnail}}" width="200px" height="130px" alt="Gambar">
                    <p class="cat">{{$berita[$i]->tag}}</p>
                    <a href="pages/{{$berita[$i]->slug}}">
                        <h6>{{$berita[$i]->judul_berita}}</h6>
                    </a>

                </div>
            <?php endfor ?>
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
                <img src="/image/{{$berita[0]->thumbnail}}" width="100%" height="180px" alt="">
                <p class="cat">{{$berita[0]->tag}}</p>
                <a href="">
                    <h5>{{$berita[0]->judul_berita}}</h5>
                </a>
            </div>

            <ul>
                <?php for ($i = 1; $i < 4; $i++) : ?>
                    <li>
                        <div class="list">
                            <img src="/image/{{$berita[$i]->thumbnail}}" width="70px" height="65px" alt="Thumbnail">
                            <p class="cat">{{$berita[$i]->tag}}</p>
                            <a href="pages/{{$berita[$i]->slug}}">
                                <h5>{{$berita[$i]->judul_berita}}</h5>
                            </a>
                        </div>
                    </li>
                <?php endfor ?>
                <li class="show">
                    <a href="/pages/all"> Show More </a>
                </li>
            </ul>
        </div>
    </aside>

</div>


@endsection
