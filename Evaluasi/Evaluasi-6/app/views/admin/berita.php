<div class="container produk">

    <form action="<?= BASEURL . "/admin/cari" ?>" method="post">
        <input type="text" placeholder="Cari Berita..." name="cari" id="cari">
        <button type="submit">Cari</button>
    </form>

    <div class="list">
        <ul>
            <div class="head">
                <li>
                    <h2> Daftar Berita </h2>
                </li>
            </div>
            <div class="body">
                <?php foreach ($data["data"] as $data) : ?>
                    <li>
                        <h5><?= $data["judul_berita"] ?></h5>
                        <p>Kategori : <?= $data["kategori"] ?></p>
                        <div class="aksi">
                            <a href="<?= BASEURL ?>/home/berita/<?= $data["id_berita"] ?>">Lihat</a>
                            <a href="<?= BASEURL ?>/admin/getUbah/<?= $data["id_berita"] ?>">Ubah</a>
                            <a href="<?= BASEURL ?>/admin/delete/<?= $data["id_berita"] ?>" class="badge badge-danger float-right ml-2" onclick="return confirm('Yakin Hapus ?')">Hapus</a>
                        </div>
                    </li>
                <?php endforeach ?>
            </div>
        </ul>
    </div>

</div>