<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $data["judul"] ?></title>

    <!-- My css -->
    <link rel="stylesheet" href="<?= $data['css'] ?>">

</head>

<body>

    <header>

        <div class="hero">
            <a href="<?= BASEURL . "/home" ?>">
                <h1>Endonewsia<span>.com</span></h1>
            </a>
            <div class="cari">
                <form action="<?= BASEURL . "/home/cari" ?>" method="post">
                    <input type="text" placeholder="Cari Berita Trending Hari ini..." autocomplete="off" name="cari">
                    <button type="submit">Cari</button>
                </form>
            </div>
        </div>

        <nav>
            <ul>
                <a href="<?= BASEURL . "/home" ?>">
                    <li>Home</li>
                </a>
                <a href="<?= BASEURL . "/home/kategori/10" ?>">
                    <li>Indonesia</li>
                </a>
                <a href="<?= BASEURL . "/home/kategori/12" ?>">
                    <li>Dunia</li>
                </a>
                <a href="<?= BASEURL . "/home/kategori/8" ?>">
                    <li>Ekonomi</li>
                </a>
                <a href="<?= BASEURL . "/home/kategori/9" ?>">
                    <li>Bola</li>
                </a>
                <a href="<?= BASEURL . "/home/kategori/11" ?>">
                    <li>Teknologi</li>
                </a>
                <a href="<?= BASEURL . "/home/kategori/13" ?>">
                    <li>Edukasi</li>
                </a>
                <a href="<?= BASEURL . "/home/kategori/14" ?>">
                    <li>Travel</li>
                </a>
                <a href="<?= BASEURL . "/home/kategori/16" ?>">
                    <li>Otomotif</li>
                </a>
                <a href="<?= BASEURL . "/home/kategori/15" ?>">
                    <li>Fakta</li>
                </a>
            </ul>
        </nav>

    </header>