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

    public function berita()
    {
        // data
        $data["judul"] = "Daftar Berita";
        $data["css"] = BASEURL . "/css/admin/style.css";

        // models 
        $data["data"] = $this->model("Admin_model")->getAllData();

        // views
        $this->view("template/admin/header", $data);
        $this->view("admin/berita", $data);
        $this->view("template/admin/footer");
    }

    public function tambah()
    {
        // data
        $data["judul"] = "Tambah Berita";
        $data["css"] = BASEURL . "/css/admin/style.css";
        $data["data"] = $this->model("Admin_model")->getKategori();

        // views
        $this->view("template/admin/header", $data);
        $this->view("admin/tambah", $data);
        $this->view("template/admin/footer");
    }

    public function tambahBerita()
    {
        if ($this->model("Admin_model")->tambahData($_POST) > 0) {
            echo "<script>
                    alert ('Data Berhasil Ditambahkan');
                    document.location.href='" . BASEURL . "/admin/berita" . "'
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
        if ($this->model("Admin_model")->deleteData($id) > 0) {
            echo "<script>
                        alert ('Data Berhasil DiHapus');
                        document.location.href='" . BASEURL . "/admin/berita" . "'
                    </script>";

            exit;
        } else {

            echo "<script>
                        alert ('Data Gagal DiHapus');
                        document.location.href='" . BASEURL . "/admin/berita" . "'
                    </script>";
            exit;
        }
    }

    public function getUbah($id)
    {
        // data
        $data["judul"] = "Ubah Berita";
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
        if ($this->model("Admin_model")->ubahData($_POST, $id) > 0) {
            echo "<script>
                    alert ('Data Berhasil Diubah');
                    document.location.href='" . BASEURL . "/admin/berita" . "'
                 </script>";

            exit;
        } else {
            echo "<script>
                    alert ('Data Gagal Diubah');
                    document.location.href='" . BASEURL . "/admin/berita" . "'
                 </script>";

            exit;
        }
    }

    public function settings()
    {
        // data
        $data["judul"] = "Settings";
        $data["css"] = BASEURL . "/css/admin/style.css";

        // views
        $this->view("template/admin/header", $data);
        $this->view("admin/settings", $data);
        $this->view("template/admin/footer");
    }

    public function cari()
    {
        // data
        $data["judul"] = "Daftar Berita";
        $data["css"] = BASEURL . "/css/admin/style.css";

        // models 
        $data["data"] = $this->model("Admin_model")->cari($_POST);

        // views
        $this->view("template/admin/header", $data);
        $this->view("admin/berita", $data);
        $this->view("template/admin/footer");
    }
}
