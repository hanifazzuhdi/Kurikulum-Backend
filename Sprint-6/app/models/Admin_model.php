<?php

class Admin_model
{
    private $table = "barang";
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllData()
    {
        $query = "SELECT * FROM $this->table INNER JOIN kategori ON barang.id_kategori = kategori.id ORDER BY id_barang ASC";

        $this->db->query($query);

        return $this->db->getAll();
    }

    public function getKategori()
    {
        $query = "SELECT * FROM kategori ORDER BY id ASC";

        $this->db->query($query);

        return $this->db->getAll();
    }

    public function getDataById($id)
    {
        $query =  "SELECT * FROM $this->table WHERE id_barang = :id";

        $this->db->query($query);

        $this->db->bind("id", $id);

        return $this->db->getSinggle();
    }

    public function tambahData($data)
    {
        $query = "INSERT INTO $this->table VALUES 
        (null, :nama_barang, :harga_barang, :gambar,:deskripsi, :kategori) ";

        $this->db->query($query);

        $this->db->bind("nama_barang", $data["nama_produk"]);
        $this->db->bind("harga_barang", $data["harga_produk"]);
        $this->db->bind("gambar", $data["foto_produk"]);
        $this->db->bind("deskripsi", $data["deskripsi"]);
        $this->db->bind("kategori", $data["kategori"]);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteData($id)
    {
        $this->db->query("DELETE FROM $this->table WHERE id_barang =:id");

        $this->db->bind("id", $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahData($data, $id)
    {
        $query = "UPDATE $this->table SET
                nama_barang = :nama_barang,
                harga_barang = :harga_barang,
                gambar = :foto_produk,
                deskripsi = :deskripsi,
                id_kategori = :kategori 
                WHERE id_barang = $id";

        $this->db->query($query);

        $this->db->bind("nama_barang", $data["nama_produk"]);
        $this->db->bind("harga_barang", $data["harga_produk"]);
        $this->db->bind("foto_produk", $data["foto_produk"]);
        $this->db->bind("deskripsi", $data["deskripsi"]);
        $this->db->bind("kategori", $data["kategori"]);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cari($data)
    {
        $data = $data['cari'];

        $query = "SELECT * FROM $this->table INNER JOIN kategori ON barang.id_kategori = kategori.id WHERE nama_barang LIKE '%$data%' ORDER BY id_barang ASC";

        $this->db->query($query);

        return $this->db->getAll();
    }
}
