<div class="container tambah">

    <h1>Tambah Berita</h1>

    <form action="<?= BASEURL . "/admin/tambahBerita" ?>" method="post">

        <div class="content">
            <label>Nama Berita : </label>
            <br>
            <input required type="text" name="judul_berita">
        </div>

        <div class="content">
            <label>Kategori : </label>
            <br>
            <select required name="kategori" id="kategori">
                <?php foreach ($data["data"] as $kategori) :  ?>
                    <option value="<?= $kategori["id"] ?>"><?= $kategori["kategori"] ?></option>
                <?php endforeach ?>
            </select>
        </div>

        <div class="content foto">
            <label>Gambar Header : </label>
            <br>
            <input required type="text" value="http://localhost/endonewsia/public/img/" name="gambar_header">
        </div>

        <div class="content">
            <label>Deskripsi : </label>
            <br>
            <textarea required name="deskripsi" cols="30" rows="10"> </textarea>
        </div>

        <div class="content">
            <button type="submit" name="submit">Tambah</button>
        </div>

    </form>


</div>