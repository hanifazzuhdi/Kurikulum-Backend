<?php

use core\Controller;

// <?php var_dump($data["data"])


class Home extends Controller
{
    public function index()
    {
        // Data
        $data["judul"] = "Endonewsia || Portal Berita Ter-Populer || ";
        $data["css"] = BASEURL . "/css/user/style.css";

        // Model
        $data["data"] = $this->model("Home_model")->getAllData();
        $data["new"] = $this->model("Home_model")->getDESC();

        // Views
        $this->view("template/user/header", $data);
        $this->view("user/index", $data);
        $this->view("template/user/footer");
    }

    public function berita($id)
    {
        // Model
        $data["data"] = $this->model("Home_model")->getSinggle($id);
        $data["new"] = $this->model("Home_model")->getDESC();

        // Data
        $data["judul"] = "Endonewsia - " . $data["data"]["judul_berita"];
        $data["css"] = BASEURL . "/css/user/style.css";

        // Views
        $this->view("template/user/header", $data);
        $this->view("user/berita", $data);
        $this->view("template/user/footer");
    }

    public function kategori($id)
    {
        // Model
        $data["data"] = $this->model("Home_model")->getKategori($id);

        // Data
        $data["judul"] = "Endonewsia - Kategori ";
        $data["header"] = "Kategori Terkait";
        $data["css"] = BASEURL . "/css/user/style.css";

        // Views
        $this->view("template/user/header", $data);
        $this->view("user/kategori", $data);
        $this->view("template/user/footer");
    }

    public function cari()
    {
        // Model
        $data["data"] = $this->model("Home_model")->getCari($_POST);

        // Data
        $data["judul"] = "Endonewsia - Pencarian ";
        $data["header"] = "Pencarian Berita";
        $data["css"] = BASEURL . "/css/user/style.css";

        // Views
        $this->view("template/user/header", $data);
        $this->view("user/kategori", $data);
        $this->view("template/user/footer");
    }

    public function all()
    {
        // Model
        $data["data"] = $this->model("Home_model")->All();

        // Data
        $data["judul"] = "Endonewsia - Berita Terbaru ";
        $data["header"] = "Berita Terbaru";
        $data["css"] = BASEURL . "/css/user/style.css";

        // Views
        $this->view("template/user/header", $data);
        $this->view("user/kategori", $data);
        $this->view("template/user/footer");
    }
}
