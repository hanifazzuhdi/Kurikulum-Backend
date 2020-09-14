<?php

// Kelola Perpustakaan
class Perpustakaan
{
    protected $judul,
        $isbn,
        $penulis;

    public function __construct($judul = "Judul", $isbn = "ISBN", $penulis = "Penulis")
    {
        $this->judul = $judul;
        $this->isbn = $isbn;
        $this->penulis = $penulis;
    }

    public function getInfoBuku()
    {
        return "Judul Buku : {$this->judul} | ISBN : {$this->isbn} | Penulis : {$this->penulis}";
    }
}

class Pengunjung extends Perpustakaan
{
    public function datang($nama)
    {
        return "Selamat Datang $nama";
    }

    public function pulang($nama)
    {
        return "Terimakasih Sudah Berkunjung $nama";
    }
}

class kelolaPinjaman extends Perpustakaan
{
    public function pinjamBuku($buku)
    {
        return "Anda Telah Meminjam Buku, {$buku->getInfoBuku()}";
    }

    public function kembalikanBuku()
    {
        return "Terimakasih Sudah Mengembalikan Buku ";
    }
}

// Inisialisasi class Buku
$buku1 = new Perpustakaan("Ketika Dia", "87665", "Hanif");
$buku2 = new Perpustakaan("Aku Bukan Dia", "21781", "Fatih");
$buku3 = new Perpustakaan("Ketika Kamu", "11987", "Sabrina");

// Inisialisasi class Pengunjung
$peminjam1 = new kelolaPinjaman();
$peminjam2 = new kelolaPinjaman();
$peminjam3 = new kelolaPinjaman();

echo $peminjam1->pinjamBuku($buku1) . "\n";
echo $peminjam2->pinjamBuku($buku2) . "\n";
echo $peminjam3->kembalikanBuku() . "\n";


// Untuk Dinamis

// <?php

// require 'latihan.php';

// // Kondisi Pengunjung 
// echo "1. Datang | 2. Pulang : ";
// $kondisi = trim(fgets(STDIN));
// echo "Nama Pengunjung : ";
// $nama = trim(fgets(STDIN));

// if ($kondisi == 1) {
//     $pengunjung = new Pengunjung();
//     echo $pengunjung->datang($nama) . "\n";
// } else if ($kondisi == 2) {
//     $pengunjung = new Pengunjung();
//     echo $pengunjung->pulang($nama) . "\n";
//     exit;
// }

// // pinjam atau kembalikan
// echo "Mau Pinjam atau Kembalikan Buku ? : ";
// $book = trim(fgets(STDIN));

// if ($book == "pinjam") {

//     echo "Daftar Buku :" . "\n";
//     echo "1. Ketika Dia" . "\n" . "2. Aku Bukan Dia" . "\n" . "3. Ketika Kamu" . "\n";
//     echo "Silahkan masukkan angka pada buku yang ingin dipinjam : ";
//     $pilih = trim(fgets(STDIN));

//     if ($pilih == 1) {
//         $buku1 = new Perpustakaan("Ketika Dia", "87665", "Hanif");
//         $peminjam1 = new kelolaPinjaman();
//         echo $peminjam1->pinjamBuku($buku1) . "\n";
//     } else if ($pilih == 2) {
//         $buku2 = new Perpustakaan("Aku Bukan Dia", "21781", "Fatih");
//         $peminjam2 = new kelolaPinjaman();
//         echo $peminjam2->pinjamBuku($buku2) . "\n";
//     } elseif ($pilih == 3) {
//         $buku3 = new Perpustakaan("Ketika Kamu", "11987", "Sabrina");
//         $peminjam3 = new kelolaPinjaman();
//         echo $peminjam3->pinjamBuku($buku3) . "\n";
//     }
// } else {
//     $kembalikan = new kelolaPinjaman();
//     echo $kembalikan->kembalikanBuku() . "\n";
//     exit;
// }
