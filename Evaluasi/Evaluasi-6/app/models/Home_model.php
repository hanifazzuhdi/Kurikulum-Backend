<?php

class Home_model
{
    private $table = "berita",
        $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllData()
    {
        $this->db->query("SELECT * FROM $this->table");

        return $this->db->getAll();
    }

    public function getSinggle($id)
    {
        $this->db->query("SELECT * FROM $this->table WHERE id_berita = :id");

        $this->db->bind("id", $id);

        return $this->db->getSinggle();
    }
    public function getKategori($id)
    {
        $this->db->query("SELECT * FROM berita INNER JOIN kategori ON id_kategori = id WHERE id = $id");

        return $this->db->getAll();
    }

    public function getCari($key)
    {
        if ($key == NULL) {
            $key = "a";
        }

        $key = $key["cari"];

        $this->db->query("SELECT * FROM $this->table WHERE judul_berita LIKE '%$key%' ");

        return $this->db->getAll();
    }

    public function getDESC()
    {
        $this->db->query("SELECT * FROM $this->table ORDER BY id_berita DESC");

        return $this->db->getAll();
    }

    public function All()
    {
        $this->db->query("SELECT * FROM $this->table ORDER BY id_berita DESC");

        return $this->db->getAll();
    }
}
