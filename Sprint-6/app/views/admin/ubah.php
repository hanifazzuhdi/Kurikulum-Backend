<div class="container tambah">

    <h1>Ubah Data</h1>

    <form action="<?= BASEURL . "/admin/ubahData/" . $data["data"]["id_barang"] ?>" method="post">

        <div class="content">
            <label>Nama Produk : </label>
            <br>
            <input id="nama_barang" value="<?= $data["data"]['nama_barang'] ?>" type="text" name="nama_produk">
        </div>

        <div class="content">
            <label>Kategori : </label>
            <br>
            <select required name="kategori" id="kategori">
                <?php foreach ($data["kategori"] as $kategori) :  ?>
                    <option value="<?= $kategori["id"] ?>"><?= $kategori["kategori"] ?></option>
                <?php endforeach ?>
            </select>
        </div>

        <div class="content">
            <label>Harga : </label>
            <br>
            <input id="harga_produk" value="<?= $data["data"]['harga_barang'] ?>" type="text" name="harga_produk">
        </div>

        <div class="content foto">
            <label>Foto Produk : </label>
            <br>
            <input id="gambar" value="<?= $data["data"]['gambar'] ?>" type="text" name="foto_produk">
        </div>

        <div class="content">
            <label>Deskripsi : </label>
            <br>
            <textarea id="deskripsi" name="deskripsi" cols="30" rows="10"><?= $data["data"]['deskripsi'] ?></textarea>
        </div>

        <div class="content">
            <button type="submit" name="submit">Ubah</button>
        </div>

    </form>


</div>