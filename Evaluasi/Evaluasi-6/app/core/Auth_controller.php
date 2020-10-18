<?php

class Auth_controller
{
    private $dbhost = DBHOST;
    private $dbuser = DBUSER;
    private $dbpass = DBPASS;
    private $dbname = DBNAME;

    // private $stmt;

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->dbhost;dbname=$this->dbname", $this->dbuser, $this->dbpass);
        } catch (PDOException $e) {
            echo "Gagal : " . $e->getMessage();
        }
    }

    public function auth_login($email, $pass)
    {
        $get = $this->conn->query("SELECT * FROM user WHERE email = '$email' ");

        $getResult = $get->fetch(PDO::FETCH_ASSOC);

        // cek email
        if ($get->rowCount() === 1) {

            // Cek password
            if (password_verify($pass, $getResult["password"])) {

                session_start();
                $_SESSION["status"] = true;

                return 2;
            } else {
                return 1;

                exit;
            }
        } else {
            return 0;
            exit;
        }
    }

    public function auth_register($email, $pass, $confirm, $pin, $confirmPin)
    {
        // Cek params 
        if ($email == null and $pass == null) {
            echo "<script>
                    alert('Field Tidak Boleh KOSONG!');
                    document.location.href='" . BASEURL . "/login/register" . "'
                  </script>";
            exit;
        }

        // Cek Email
        $get = $this->conn->query("SELECT email FROM user WHERE email = '$email' ");

        if ($get->rowCount() === 1) {
            return 0;
        }

        // Cek password + enkripsi
        if ($pass === $confirm) {
            $password = password_hash($pass, PASSWORD_DEFAULT);
        } else {
            return 1;
        }

        // cek pin
        if ($pin === $confirmPin) {
            // input data akun
            $this->conn->query("INSERT INTO user VALUES (null, '$email', '$password') ");

            return 3;
        } else {
            return 2;
        }
    }
}
