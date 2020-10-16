<div class="container tambah">

    <h1>Tambah Produk</h1>

    <form action="<?= BASEURL . "/admin/tambahData" ?>" method="post">

        <div class="content">
            <label>Nama Produk : </label>
            <br>
            <input required type="text" name="nama_produk">
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

        <div class="content">
            <label>Harga : </label>
            <br>
            <input required type="text" name="harga_produk">
        </div>

        <div class="content foto">
            <label>Foto Produk : </label>
            <br>
            <input required type="text" name="foto_produk">
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