<?php

class AuthController
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

    public function login($data)
    {
        $email = $data["email"];
        $pass = $data["password"];

        // cek email
        $login = $this->conn->query("SELECT * FROM admin WHERE email = '$email' ");

        $row = $login->fetchAll(PDO::FETCH_ASSOC);

        if ($login->rowCount() === 1) {

            // cek password
            if (password_verify($pass, $row[0]["password"])) {

                if (isset($_POST["check"])) {
                    setcookie("key", "gdsvanksdjbg27tgedw", time() + 3600);
                }
                $_SESSION["status"] = true;


                header("Location: index.php");
            } else {
                echo "<script>
                alert('Password Anda Salah!');
                document.location.href='login.php'
                    </script>";
                exit;
            }
        } else {
            echo "<script>
                alert('Email Tidak Terdaftar!');
                document.location.href='login.php'
                </script>";
        }
    }
    public function registrasi($data)
    {
        $email = $data["email"];
        $pass = $data["password"];
        $confirm = $data["confirm"];

        // Cek ketersediaan email
        $get = $this->conn->query("SELECT email FROM admin WHERE email = '$email'");

        if ($get->fetchAll(PDO::FETCH_ASSOC)) {
            echo "<script>
                    alert('Email Telah Terdaftar!');
                    document.location.href='registrasi.php'
                 </script>";
            exit;
        }

        // cek password
        if ($pass !== $confirm) {
            echo "<script>
                    alert('Konfirmasi Password Tidak Sama!');
                    document.location.href='registrasi.php'
                </script>";
            exit;
        }

        // ENKRIPSI DAN INSERT DATA
        $pass = password_hash($pass, PASSWORD_DEFAULT);

        $query = "INSERT INTO admin (email, password) VALUES ('$email', '$pass')";

        $insert = $this->conn->query($query);

        return $insert->rowCount();
    }
}

$conn = new AuthController();
