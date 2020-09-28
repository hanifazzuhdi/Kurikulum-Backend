<?php

class connectPdo
{
    public function __construct()
    {
        $host = "localhost";
        $user = "hanif";
        $password = "123";
        $dbname = "sprint4";

        $this->conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    }

    // READ
    public function tampilData($tabel)
    {
        $query = "SELECT * FROM $tabel";

        $tampil = $this->conn->prepare($query);
        $tampil->execute();

        $hasil = $tampil->fetchAll(PDO::FETCH_ASSOC);
        return $hasil;
    }

    // CREATE
    public function insertData($nama, $harga)
    {
        $query = "INSERT INTO barang (namaBarang, hargaBarang) VALUES (?,?)";

        $tambah = $this->conn->prepare($query);

        // masukkan variabel
        $tambah->bindParam(1, $nama);
        $tambah->bindParam(2, $harga);

        $tambah->execute();

        return $tambah->rowCount();
    }

    public function insertKurir($kurir, $pengirim, $asal, $tujuan)
    {
        $query = "INSERT INTO kurir (namaKurir,namaPengirim,tujuanBarang,asalBarang) VALUES (?,?,?,?)";

        $tambah = $this->conn->prepare($query);

        // masukkan variable
        $tambah->bindParam(1, $kurir);
        $tambah->bindParam(2, $pengirim);
        $tambah->bindParam(3, $asal);
        $tambah->bindParam(4, $tujuan);

        $tambah->execute();

        return $tambah->rowCount();
    }

    // Update 
    public function update($data, $id)
    {
        $nama = $data['namaBarang'];
        $harga = $data['hargaBarang'];

        $query = "UPDATE barang SET namaBarang='$nama',hargaBarang=$harga WHERE id = $id";

        $update = $this->conn->prepare($query);

        $update->execute();

        return $update->rowCount();
    }

    public function updateKurir($data, $id)
    {
        $nama = $data['kurir'];
        $pengirim = $data['pengirim'];
        $asal = $data['asal'];
        $tujuan = $data['tujuan'];

        $query = "UPDATE kurir SET namaKurir='$nama',namaPengirim='$pengirim', asalBarang='$asal', tujuanBarang='$tujuan' WHERE id = $id";

        $update = $this->conn->prepare($query);

        $update->execute();

        return $update->rowCount();
    }

    // DELETE
    public function hapus($id, $tabel)
    {
        $query = "DELETE FROM $tabel WHERE id = $id";

        $hapus = $this->conn->prepare($query);
        $hapus->execute();

        return $hapus->rowCount();
    }
}
