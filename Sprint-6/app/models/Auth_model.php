<?php

class Auth_model
{
    // private $table = "user";
    private $db;

    private $email,
        $pass,
        $confirm,
        $confirmPin,
        $pin = "1234567890";

    public function __construct()
    {
        $this->db = new Auth_controller();
    }

    public function login($data)
    {
        $this->email = $data["email"];
        $this->pass = $data["password"];

        return $this->db->auth_login($this->email, $this->pass);
    }

    public function registrasi($data)
    {
        $this->email = $data["email"];
        $this->pass = $data["password"];
        $this->confirm = $data["confirm"];
        $this->confirmPin = $data["confirmPin"];

        return $this->db->auth_register($this->email, $this->pass, $this->confirm, $this->pin, $this->confirmPin);
    }
}
