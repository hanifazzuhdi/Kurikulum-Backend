<?php

use core\Controller;

class Login extends Controller
{
    public function index()
    {
        // data
        $data["judul"] = "Login - Admin SHOPI";
        $data["css"] = BASEURL . "/css/auth/style.css";

        // Views
        $this->view("template/auth/header", $data);
        $this->view("auth/index");
        $this->view("template/auth/footer");
    }

    public function log()
    {
        switch (true) {
            case $this->model("Auth_model")->login($_POST) == 1:
                echo "<script>
                        alert('Password Yang Anda Masukkan SALAH');
                        document.location.href='" . BASEURL . "/login/index" . "'
                    </script>";
                break;
            case $this->model("Auth_model")->login($_POST) == 0:
                echo "<script>
                        alert('Email Yang Anda Masukkan TIDAK TERDAFTAR');
                        document.location.href='" . BASEURL . "/login/index" . "'
                    </script>";
                break;
            default:
                header("Location:" . BASEURL . "/admin");
                break;
        }
    }

    public function register()
    {
        // data
        $data["judul"] = "Registrasi - Admin SHOPI";
        $data["css"] = BASEURL . "/css/auth/style.css";

        // Views
        $this->view("template/auth/header", $data);
        $this->view("auth/register");
        $this->view("template/auth/footer");
    }

    public function registrasiAkun()
    {
        switch (true) {
            case $this->model("Auth_model")->registrasi($_POST) == 0:
                echo "<script>
                        alert('Email Sudah TERDAFTAR');
                        document.location.href='" . BASEURL . "/login/register" . "'
                    </script>";
                break;
            case $this->model("Auth_model")->registrasi($_POST) == 1:
                echo "<script>
                        alert('Konfirmasi Password Harus Sama');
                        document.location.href='" . BASEURL . "/login/register" . "'
                    </script>";
                break;
            case $this->model("Auth_model")->registrasi($_POST) == 2:
                echo "<script>
                            alert('PIN Salah, Hanya Owner Yang Bisa Menambahkan');
                            document.location.href='" . BASEURL . "/login/register" . "'
                        </script>";
                break;
            default:
                echo "<script>
                        alert('Akun Berhasil Dibuat');
                        document.location.href='" . BASEURL . "/login" . "'
                    </script>";
                break;
        }
    }
}
