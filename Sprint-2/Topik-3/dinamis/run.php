<?php

require 'latihan.php';

// Instansiasi Class
$pengunjung = new Pengunjung();
$pinjam = new kelolaPinjaman();

echo "==================================\n";
echo "|       WELCOME TO LIBRARY       |\n";
echo "| Program Kunjungan Perpustakaan |\n";
echo "==================================\n";

// Kondisi Pengunjung
echo "1. Datang | 2. Pulang : ";
$kondisi = trim(fgets(STDIN));

echo "Masukkan Nama : ";
$nama = trim(fgets(STDIN));

echo "==================================\n";

if ($kondisi == 1) {
    try {
        //code...
        echo $pengunjung->datang($nama);
    } catch (Exception $error) {
        //throw 
        echo $error->getMessage();
        exit;
    }
} else if ($kondisi == 2) {
    try {
        //code...
        echo $pengunjung->pulang($nama);
    } catch (Exception $error) {
        //throw 
        echo $error->getMessage();
        exit;
    }
} else {
    echo "Inputan SALAH ! \n";
    exit;
}

// Kelola Pinjam Atau Baca
echo "Mau Pinjam Atau Baca Buku ? : ";
$pilih = strtolower(trim(fgets(STDIN)));

if ($pilih == "pinjam") {

    echo "Daftar Buku : \n";
    echo "1. Ketika Dia \n2. Aku Bukan Dia \n3. Ketika Aku \n";
    echo "Pinjam Yang Mana ? (Maks pinjam Buku 1, Input dengan angka disamping judul) : ";
    $buku = trim(fgets(STDIN));

    echo "==================================\n";

    switch ($buku) {
        case '1':
            $pinjam->pinjamBuku($buku);
            break;
        case '2':
            $pinjam->pinjamBuku($buku);
            break;
        case '3':
            $pinjam->pinjamBuku($buku);
            break;
        default:
            echo "Input Tidak Sesuai !";
    }

    // Kembalikan Buku
    echo "Mau Kembalikan Buku ? (y/n) : ";
    $kembali = strtolower(trim(fgets(STDIN)));

    switch ($kembali) {
        case 'y':
            $kembalikan = new kelolaPinjaman();
            echo $kembalikan->kembalikanBuku($nama);
            break;
        case 'n':
            echo "Jangan Lupa Kembalikan Buku, " . $pengunjung->pulang($nama);
            break;
        default:
            echo "Inputan Yang anda masukkan SALAH !";
            break;
    }
} else if ($pilih == "baca") {
    echo $pinjam->baca($nama);
    exit;
} else {
    echo "Inputan Yang anda masukkan SALAH !\n";
}
