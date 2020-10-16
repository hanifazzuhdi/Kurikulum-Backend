<div class="container produk">

    <form action="<?= BASEURL . "/admin/cari" ?>" method="post">
        <input type="text" placeholder="Cari Produk..." name="cari" id="cari">
        <button type="submit">Cari</button>
    </form>

    <div class="list">
        <ul>
            <div class="head">
                <li>
                    <h2> Daftar Produk </h2>
                </li>
            </div>
            <div class="body">
                <?php foreach ($data["data"] as $data) : ?>
                    <li>
                        <h3><?= $data["nama_barang"] ?></h3>
                        <p>Kategori : <?= $data["kategori"] ?></p>
                        <div class="aksi">
                            <a href="Lihat">Lihat</a>
                            <a href="<?= BASEURL ?>/admin/getUbah/<?= $data["id_barang"] ?>">Ubah</a>
                            <a href="<?= BASEURL ?>/admin/delete/<?= $data["id_barang"] ?>" class="badge badge-danger float-right ml-2" onclick="return confirm('Yakin Hapus ?')">Hapus</a>
                        </div>
                    </li>
                <?php endforeach ?>
            </div>
        </ul>
    </div>

</div>