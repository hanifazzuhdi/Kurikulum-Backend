<div class="container tambah">

    <h1>Ubah Data</h1>

    <form action="<?= BASEURL . "/admin/ubahData/" . $data["data"]["id_berita"] ?>" method="post">

        <div class="content">
            <label>Judul Berita : </label>
            <br>
            <input id="judul_berita" value="<?= $data["data"]['judul_berita'] ?>" type="text" name="judul_berita">
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

        <div class="content foto">
            <label>Gambar Header : </label>
            <br>
            <input id="gambar" value="<?= $data["data"]['gambar'] ?>" type="text" name="gambar_header">
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