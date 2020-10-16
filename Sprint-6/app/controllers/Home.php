<?php

use core\Controller;

class Home extends Controller
{
    public function index()
    {
        // Data
        $data["judul"] = "Shopii Sidoarjo - Toko Online Termurah Se-Indonesia";
        // Model

        // Views
        $this->view("template/user/header");
        $this->view("user/index");
        $this->view("template/user/footer");
    }
}
