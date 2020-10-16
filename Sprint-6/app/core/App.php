<?php

namespace core;

class App
{
    private $controller = "Home",
        $method = "Index",
        $params = [];

    public function __construct()
    {
        $url = $this->parseURL();

        // var_dump($url);
        // exit;

        if ($url == NULl) {
            $url = [$this->controller];
        }

        if (file_exists("../app/controllers/$url[0].php")) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once "../app/controllers/$this->controller.php";
        $this->controller = new $this->controller;

        // cek method
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // cek params 
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        // echo "<br>";
        // var_dump($this->params);
        // exit;

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL()
    {
        if (isset($_GET["url"])) {
            $url = rtrim($_GET["url"], "/");
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode("/", $url);

            foreach ($url as $val) {
                $result[] = ucfirst($val);
            }

            return $result;
        }
    }
}
