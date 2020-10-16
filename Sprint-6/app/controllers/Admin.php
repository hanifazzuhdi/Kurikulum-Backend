<?php

use core\Controller;

class Admin extends Controller
{
    public function index()
    {
        // data
        $data["judul"] = "Admin";
        $data["css"] = BASEURL . "/css/admin/style.css";

        // views
        $this->view("template/admin/header", $data);
        $this->view("admin/index");
        $this->view("template/admin/footer");
    }

    public function produk()
    {
        // data
        $data["judul"] = "Daftar Produk";
        $data["css"] = BASEURL . "/css/admin/style.css";

        // models 
        $data["data"] = $this->model("Admin_model")->getAllData();

        // views
        $this->view("template/admin/header", $data);
        $this->view("admin/produk", $data);
        $this->view("template/admin/footer");
    }

    public function tambah()
    {
        // data
        $data["judul"] = "Tambah Produk";
        $data["css"] = BASEURL . "/css/admin/style.css";
        $data["data"] = $this->model("Admin_model")->getKategori();

        // views
        $this->view("template/admin/header", $data);
        $this->view("admin/tambah", $data);
        $this->view("template/admin/footer");
    }

    public function tambahData()
    {
        if ($this->model("Admin_model")->tambahData($_POST) > 0) {
            echo "<script>
                    alert ('Data Berhasil Ditambahkan');
                    document.location.href='" . BASEURL . "/admin/produk" . "'
                 </script>";

            exit;
        } else {
            echo "<script>
                    alert ('Data Gagal Ditambahkan');
                    document.location.href='" . BASEURL . "/admin/tambah" . "'
                 </script>";

            exit;
        }
    }

    public function delete($id)
    {
        // var_dump($id);

        if ($this->model("Admin_model")->deleteData($id) > 0) {
            echo "<script>
                        alert ('Data Berhasil DiHapus');
                        document.location.href = 'http://localhost/sopi/public/admin/produk'
                    </script>";

            exit;
        } else {

            echo "<script>
                        alert ('Data Gagal DiHapus');
                        document.location.href = 'http://localhost/sopi/public/admin/produk'
                    </script>";
            exit;
        }
    }

    public function getUbah($id)
    {
        // data
        $data["judul"] = "Ubah Data";
        $data["css"] = BASEURL . "/css/admin/style.css";

        // Model
        $data["data"] = $this->model("Admin_model")->getDataById($id);
        $data["kategori"] = $this->model("Admin_model")->getKategori();
        // views
        $this->view("template/admin/header", $data);
        $this->view("admin/ubah", $data);
        $this->view("template/admin/footer");
    }

    public function ubahData($id)
    {
        // var_dump($id);
        // var_dump($_POST);
        // exit;

        if ($this->model("Admin_model")->ubahData($_POST, $id) > 0) {
            echo "<script>
                    alert ('Data Berhasil Diubah');
                    document.location.href='" . BASEURL . "/admin/produk" . "'
                 </script>";

            exit;
        } else {
            echo "<script>
                    alert ('Data Gagal Diubah');
                    document.location.href='" . BASEURL . "/admin/produk" . "'
                 </script>";

            exit;
        }
    }

    public function cari()
    {
        // data
        $data["judul"] = "Daftar Produk";
        $data["css"] = BASEURL . "/css/admin/style.css";

        // models 
        $data["data"] = $this->model("Admin_model")->cari($_POST);

        // views
        $this->view("template/admin/header", $data);
        $this->view("admin/produk", $data);
        $this->view("template/admin/footer");
    }
}
