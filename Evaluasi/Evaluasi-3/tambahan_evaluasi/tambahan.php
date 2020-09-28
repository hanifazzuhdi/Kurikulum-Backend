<?php

use PhpMyAdmin\Display\Results;

class KoneksiPdo
{
    protected $serverName = "localhost",
        $username = "hanif",
        $password = "123";

    public function __construct()
    {

        $this->connect = new PDO("mysql:host=$this->serverName; dbname=tambahan", $this->username, $this->password);
    }

    public function insertData()
    {
        echo "input berapa data : ";
        $jumlah = trim(fgets(STDIN));

        $query = "INSERT INTO dataSantri (namaSantri, nilaiSantri) VALUES (?,?)";

        $tambah = $this->connect->prepare($query);
        for ($i = 1; $i <= $jumlah; $i++) {
            echo "Data ke $i \n";
            echo "Nama : ";
            $namaSantri = trim(fgets(STDIN));
            echo "nilaiSantri : ";
            $nilaiSantri = trim(fgets(STDIN));

            $tambah->execute([$namaSantri, $nilaiSantri]);
        }
    }

    public function jumlahSantri()
    {
        $query = "SELECT COUNT(*) FROM dataSantri";

        $jumlahSantri = $this->connect->prepare($query);
        $jumlahSantri->execute();

        $result = $jumlahSantri->fetchAll(pdo::FETCH_COLUMN);

        echo "Jumlah Santri : ";
        foreach ($result as $hasil) {
            echo $hasil . "\n";
        }
    }

    public function rataNilai()
    {
        $query = "SELECT AVG(nilaiSantri) FROM dataSantri";

        $rataNilai = $this->connect->prepare($query);
        $rataNilai->execute();

        $result = $rataNilai->fetchAll(pdo::FETCH_COLUMN);

        echo "Rata-rata Nilai : ";
        foreach ($result as $hasil) {
            echo $hasil . "\n";
        }
    }

    public function nilaiBagus()
    {
        $query = "SELECT namaSantri,nilaiSantri FROM dataSantri WHERE nilaiSantri>80 ORDER BY nilaiSantri DESC";

        $nilaiBagus = $this->connect->prepare($query);
        $nilaiBagus->execute();

        $result = $nilaiBagus->fetchAll(pdo::FETCH_ASSOC);

        print_r($result);
    }

    public function nilaijelek()
    {
        $query = "SELECT namaSantri,nilaiSantri FROM dataSantri WHERE nilaiSantri<=65 ORDER BY nilaiSantri DESC";

        $nilaiJelek = $this->connect->prepare($query);
        $nilaiJelek->execute();

        $result = $nilaiJelek->fetchAll(pdo::FETCH_ASSOC);
        print_r($result);
    }

    public function tampilData()
    {

        $query = "SELECT namaSantri,nilaiSantri FROM dataSantri ORDER BY nilaiSantri DESC";

        $tampil = $this->connect->prepare($query);
        $tampil->execute();

        $result = $tampil->fetchAll(pdo::FETCH_ASSOC);

        print_r($result);
        echo "Terimkasih\n";
    }
}

$sambung = new KoneksiPdo();

// Tambah data
$sambung->insertData();
// Hitung jumlah
$sambung->jumlahSantri();
// rata-rata Santri
$sambung->rataNilai();
// Jumlah diatas 80
$sambung->nilaiBagus();
// Nilai dibawah 65
$sambung->nilaijelek();
// Tampil Data
echo "Mau Tampilkan Data ? (y/n)";
$pilih = trim(fgets(STDIN));
switch ($pilih) {
    case 'y':

        $sambung->tampilData();
        break;

    case 'n':
        echo "Terimakasih\n";
        break;

    default:
        echo "Inputan Salah!\n";
        break;
}
