<?php

class connectPdo
{
    public function __construct()
    {
        $host = "localhost";
        $user = "hanif";
        $password = "123";
        $dbname = "sprint4";

        $this->conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    }

    // READ
    public function tampilData($tabel)
    {
        $query = "SELECT * FROM $tabel";

        $tampil = $this->conn->prepare($query);
        $tampil->execute();

        $hasil = $tampil->fetchAll(PDO::FETCH_ASSOC);
        return $hasil;
    }

    // CREATE
    public function insertData($nama, $harga)
    {
        $query = "INSERT INTO barang (namaBarang, hargaBarang) VALUES (?,?)";

        $tambah = $this->conn->prepare($query);

        // masukkan variabel
        $tambah->bindParam(1, $nama);
        $tambah->bindParam(2, $harga);

        $tambah->execute();

        return $tambah->rowCount();
    }

    public function insertKurir($kurir, $pengirim, $asal, $tujuan)
    {
        $query = "INSERT INTO kurir (namaKurir,namaPengirim,tujuanBarang,asalBarang) VALUES (?,?,?,?)";

        $tambah = $this->conn->prepare($query);

        // masukkan variable
        $tambah->bindParam(1, $kurir);
        $tambah->bindParam(2, $pengirim);
        $tambah->bindParam(3, $asal);
        $tambah->bindParam(4, $tujuan);

        $tambah->execute();

        return $tambah->rowCount();
    }

    // Update 
    public function update($data, $id)
    {
        $nama = $data['namaBarang'];
        $harga = $data['hargaBarang'];

        $query = "UPDATE barang SET namaBarang='$nama',hargaBarang=$harga WHERE id = $id";

        $update = $this->conn->prepare($query);

        $update->execute();

        return $update->rowCount();
    }

    public function updateKurir($data, $id)
    {
        $nama = $data['kurir'];
        $pengirim = $data['pengirim'];
        $asal = $data['asal'];
        $tujuan = $data['tujuan'];

        $query = "UPDATE kurir SET namaKurir='$nama',namaPengirim='$pengirim', asalBarang='$asal', tujuanBarang='$tujuan' WHERE id = $id";

        $update = $this->conn->prepare($query);

        $update->execute();

        return $update->rowCount();
    }

    // DELETE
    public function hapus($id, $tabel)
    {
        $query = "DELETE FROM $tabel WHERE id = $id";

        $hapus = $this->conn->prepare($query);
        $hapus->execute();

        return $hapus->rowCount();
    }
}

class Users extends connectPdo
{

    public function registrasi($data)
    {
        $email = strtolower(stripslashes($data['email']));
        $password = $data['password'];
        $confirm = $data['confirm'];

        // Cek Username
        $get = $this->conn->prepare("SELECT email FROM user WHERE email = '$email'");

        $get->execute();

        // return print_r($get);

        if ($get->fetchAll(PDO::FETCH_ASSOC)) {
            echo "<script>
                    alert('Email Sudah Terdaftar!');
                    document.location.href='registrasi.php'
                 </script>";
            exit;
        }
        // Cek confirm password
        if ($password !== $confirm) {
            echo "<script>
                    alert('Konfirmasi Password Tidak Cocok!');
                    document.location.href='registrasi.php'
                 </script>";
            exit;
        }
        // Enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);

        // INSERT DATA KE DATABASE
        $tambah = $this->conn->prepare("INSERT INTO user (email, password) VALUES ('$email', '$password')");

        $tambah->execute();

        return $tambah->rowCount();
    }

    public function login($data)
    {
        $email = $data['email'];
        $password = $data['password'];

        $get = $this->conn->prepare("SELECT * FROM user WHERE email='$email'");

        $get->execute();

        // Cek email
        if ($get->rowCount() === 1) {

            $row = $get->fetchAll(PDO::FETCH_ASSOC);

            // return print_r($row);

            // Cek password
            if (password_verify($password, $row[0]["password"])) {

                // Set Cookie 
                if (isset($_POST['check'])) {
                    setcookie('id', $row[0]["id"], time() + 120);
                    setcookie('key', hash('sha256', $row[0]["email"]), time() + 120);
                }

                // Set Session
                $_SESSION["login"] = true;

                header("Location: index.php");
                exit;
            } else {
                echo "<script>
                        alert('Password Salah!');
                        document.location.href='login.php'
                     </script>";
                exit;
            }
        } else if ($get->rowCount() <= 0) {
            echo "<script>
                    alert('Email Tidak Terdaftar!');
                    document.location.href='login.php'
                 </script>";
        }
    }

    public function get_data($id)
    {
        $query = "SELECT * FROM user WHERE id = $id";

        $tampil = $this->conn->prepare($query);
        $tampil->execute();
        $result = $tampil->fetchAll(PDO::FETCH_ASSOC);

        // print_r($result);

        return $result;
    }
}
