<div class="container berita">

    <main>
        <h2><?= $data["data"]["judul_berita"] ?></h2>
        <img src="<?= $data['data']['gambar'] ?>" width="600px" height="330px" alt="Gambar">
        <p><?= $data["data"]["deskripsi"] ?></p>
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
                <img src="<?= $data['new']['0']['gambar'] ?>" width="100%" height="180px" alt="">
                <a href="<?= BASEURL . "/home/berita/" . $data["new"][0]["id_berita"] ?>">
                    <h5><?= $data["new"]["0"]["judul_berita"] ?></h5>
                </a>
            </div>

            <ul>
                <?php for ($i = 1; $i < 6; $i++) : ?>
                    <li>
                        <div class="list">
                            <img src="<?= $data['new'][$i]['gambar'] ?>" width="70px" height="65px" alt="">
                            <a href="<?= BASEURL . "/home/berita/" . $data["new"][$i]['id_berita'] ?>">
                                <h5><?= $data["new"][$i]["judul_berita"] ?></h5>
                            </a>
                        </div>
                    </li>
                <?php endfor ?>
                <li class="show">
                    <a href="<?= BASEURL . "/home/all" ?>"> Show More </a>
                </li>
            </ul>
        </div>

    </aside>

</div>