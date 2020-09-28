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

    public function tampilData($tabel)
    {
        $query = "SELECT * FROM $tabel";

        $tampil = $this->conn->prepare($query);
        $tampil->execute();

        $hasil = $tampil->fetchAll(PDO::FETCH_ASSOC);
        return $hasil;
    }
}
