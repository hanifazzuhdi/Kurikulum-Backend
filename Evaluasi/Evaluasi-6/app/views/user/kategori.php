<div class="container kategori">

    <main>
        <h3><?= $data["header"] ?></h3>
        <ul>
            <?php foreach ($data["data"] as $data) : ?>
                <li>
                    <div class="list_kategori">
                        <img src="<?= $data["gambar"] ?>" width="90px" height="85px" alt="Gambar">
                        <a href="<?= BASEURL . "/home/berita/" . $data['id_berita']  ?>">
                            <h5><?= $data["judul_berita"] ?></h5>
                        </a>
                    </div>
                </li>
            <?php endforeach ?>
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