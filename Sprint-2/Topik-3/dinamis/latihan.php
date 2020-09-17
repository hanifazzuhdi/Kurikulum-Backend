<?php

class Perpustakaan
{
    protected $buku = [
        1 =>  [
            "judul" => "Ketika Dia",
            "isbn" => "98762",
            "penulis" => "Hanif"
        ],
        [
            "judul" => "Aku Bukan Dia",
            "isbn" => "19287",
            "penulis" => "Fatih"
        ],
        [
            "judul" => "Ketika Aku",
            "isbn" => "12765",
            "penulis" => "Sabrina"
        ]
    ];

    public function getInfo(int $index)
    {
        return "Judul Buku : {$this->buku[$index]['judul']} | ISBN : {$this->buku[$index]['isbn']} | Penulis : {$this->buku[$index]['penulis']}\n";
    }
}

// Kondisi Pengunjung
class Pengunjung extends Perpustakaan
{


    public function datang(string $nama)
    {
        if ($nama == null) {
            throw new Exception("Masukkan Nama Dengan BENAR ! \n", 1);
        }

        return "Selamat Datang $nama \n";
    }

    public function pulang(string $nama)
    {
        if ($nama == null) {
            throw new Exception("Masukkan Nama Dengan BENAR ! \n", 1);
        }
        return "Terimakasih Sudah Berkunjung $nama :) \n";
    }
}

class kelolaPinjaman extends Perpustakaan
{
    public function baca($nama)
    {
        return "Selamat Membaca $nama\n";
    }
    public function pinjamBuku($index)
    {
        echo "Anda Meminjam Buku, {$this->getInfo($index)}";
        echo "Kembalikan Buku Sebelum " . date("d-", time() + 172800) . date("m-Y") . "\n";

        array_splice($this->buku, ($index - 1), 1);

        print_r($this->buku);
    }

    public function kembalikanBuku()
    {
        print_r($this->buku);
        return "Terimakasih Sudah mengembalikan Buku \n";
    }
}
