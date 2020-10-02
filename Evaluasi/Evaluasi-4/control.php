<?php

class Controller
{

    public function __construct()
    {

        $host = "localhost";
        $user = "hanif";
        $pass = "123";
        $dbname = "evaluasi4";
        try {
            $this->conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function tampil($query)
    {
        $sql = $this->conn->query($query);

        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function tambah($data)
    {
        $nama = $data['nama'];
        $divisi = $data['divisi'];
        $asal = $data['asal'];
        $status = $data['status'];

        $query = "INSERT INTO santri (namaSantri, divisi, asal, status) VALUES (?,?,?,?)";

        $tambah = $this->conn->prepare($query);

        $tambah->bindParam(1, $nama);
        $tambah->bindParam(2, $divisi);
        $tambah->bindParam(3, $asal);
        $tambah->bindParam(4, $status);

        $tambah->execute();

        return $tambah->rowCount();
    }

    public function update($data, $id)
    {
        $nama = $data['nama'];
        $divisi = $data['divisi'];
        $asal = $data['asal'];
        $status = $data['nama'];

        $query = "UPDATE  santri SET namaSantri = '$nama', divisi = '$divisi',asal = '$asal', status = '$status' WHERE id = $id";

        $update = $this->conn->query($query);

        return $update->rowCount();
    }
    public function delete($id)
    {
        $query = "DELETE FROM santri WHERE id = $id";

        $hapus = $this->conn->query($query);

        return $hapus->rowCount();
    }
    // public function cari($query)
    // {
    //     return $this->tampil($query);
    // }
}

$conn = new Controller();
