@extends('layouts.main')

@section('title', 'Endonewsia | Berita Terkini, Kabar Terbaru - Terupdate')

@section('content')

<div class="container kategori">


    <main>
        <h3>Pencarian Terkait</h3>
        <ul>
            {{-- {{dd($item->judul_berita)}} --}}
            @foreach ($berita as $item)
            <li>
                <div class="list_kategori">
                    <img src="/image/{{$item->thumbnail}}" width="90px" height="85px" alt="Gambar">
                    <p class="cat">{{$item->tag}}</p>
                    <a href="/pages/{{$item->slug}}">
                    <h5>{{$item->judul_berita}}</h5>
                </a>
            </div>
        </li>
        @endforeach
        </ul>

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

    </aside>

</div>

@endsection
