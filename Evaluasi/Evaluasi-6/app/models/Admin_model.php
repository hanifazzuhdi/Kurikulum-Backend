<?php

class Admin_model
{
    private $table = "berita";
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllData()
    {
        $query = "SELECT * FROM $this->table INNER JOIN kategori ON berita.id_kategori = kategori.id ORDER BY id_berita ASC";

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
        $query =  "SELECT * FROM $this->table WHERE id_berita = :id";

        $this->db->query($query);

        $this->db->bind("id", $id);

        return $this->db->getSinggle();
    }

    public function tambahData($data)
    {
        $query = "INSERT INTO $this->table VALUES 
        (null, :judul_berita, :gambar, :deskripsi, :id_kategori) ";

        $this->db->query($query);

        $this->db->bind("judul_berita", $data["judul_berita"]);
        $this->db->bind("gambar", $data["gambar_header"]);
        $this->db->bind("deskripsi", $data["deskripsi"]);
        $this->db->bind("id_kategori", $data["kategori"]);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteData($id)
    {
        $this->db->query("DELETE FROM $this->table WHERE id_berita =:id");

        $this->db->bind("id", $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahData($data, $id)
    {
        $query = "UPDATE $this->table SET
                judul_berita = :judul_berita,
                gambar = :gambar_header,
                deskripsi = :deskripsi,
                id_kategori = :kategori 
                WHERE id_berita = $id";

        $this->db->query($query);

        $this->db->bind("judul_berita", $data["judul_berita"]);
        $this->db->bind("gambar_header", $data["gambar_header"]);
        $this->db->bind("deskripsi", $data["deskripsi"]);
        $this->db->bind("kategori", $data["kategori"]);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cari($data)
    {
        $data = $data['cari'];

        $query = "SELECT * FROM $this->table INNER JOIN kategori ON berita.id_kategori = kategori.id WHERE judul_berita LIKE '%$data%' ORDER BY id_berita ASC";

        $this->db->query($query);

        return $this->db->getAll();
    }
}
