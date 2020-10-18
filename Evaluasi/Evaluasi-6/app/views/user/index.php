<div class="container">

    <main>

        <h3>Berita Utama</h3>

        <div class="content">
            <img src="<?= $data["data"]["0"]["gambar"] ?>" alt="" width="630px" height="350px">
            <a href="<?= BASEURL . "/home/berita/" . $data["data"][0]["id_berita"] ?>">
                <h2><?= $data["data"]["0"]["judul_berita"] ?></h2>
            </a>
            <p><?= substr($data["data"]["0"]["deskripsi"], 0, 200) ?>... <a class="lengkap" href="<?= BASEURL . "/home/berita/" . $data["data"][0]["id_berita"] ?>"> Baca Selengkapnya </a></p>
        </div>

        <h4>Berita Utama Lainnya</h4>

        <div class="more">

            <?php for ($i = 0; $i < 3; $i++) : ?>
                <div class="card">

                    <img src="<?= $data["data"][$i]['gambar'] ?>" width="200px" height="130px" alt="Gambar">
                    <a href="<?= BASEURL . "/home/berita/" . $data["data"][$i]['id_berita'] ?>">
                        <h6><?= $data["data"][$i]["judul_berita"] ?></h6>
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
                <img src="<?= $data["new"]["0"]["gambar"] ?>" width="100%" height="180px" alt="">
                <a href="<?= BASEURL . "/home/berita/" . $data["new"][0]["id_berita"] ?>">
                    <h5><?= $data["new"]["0"]["judul_berita"] ?></h5>
                </a>
            </div>

            <ul>
                <?php for ($i = 1; $i < 6; $i++) : ?>
                    <li>
                        <div class="list">
                            <img src="<?= $data["new"][$i]["gambar"] ?>" width="70px" height="65px" alt="">
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