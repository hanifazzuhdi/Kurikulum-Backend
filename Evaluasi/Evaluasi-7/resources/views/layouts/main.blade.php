<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <!-- My css -->
    <link rel="stylesheet" href="/css/pages/style.css">

</head>

<body>

<header>
    <div class="hero">
        <a href="/" >
            <h1>Endonewsia<span>.com</span></h1>
        </a>
        <div class="cari">
            <form action="/pages/search" method="post">
                @csrf
                <input type="text" placeholder="Cari Berita Trending Hari ini..." autocomplete="off" name="cari">
                <button type="submit">Cari</button>
            </form>
        </div>
    </div>

    <nav>
        <ul>
            <a href="/">
                <li>Home</li>
            </a>
            @foreach ($tag as $item)
            <a href="/kategori/{{$item->tag}}">
                <li>{{$item->tag}}</li>
            </a>
            @endforeach
        </ul>
    </nav>
</header>

    @yield('content')

    <footer>
        <div class="hero footer">
            <a href="">
                <h1>Endonewsia<span>.com</span></h1>
            </a>
        </div>

        <div class="info">
            <p><a href="https://tirto.id/insider/pedoman-media-siber">Pedoman Media Cyber</a> - <a href="https://github.com/hanifazzuhdi" target="_blank">About Me</a> - <a href="#">Top</a></p>
            <p>Copyright 1945 - <?= date("Y") ?> <span> PT. Hanif Digital Query.</span> All rights reserved</p>
        </div>
    </footer>

    </body>

    </html>
