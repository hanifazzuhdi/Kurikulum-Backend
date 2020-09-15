<?php

// Kelola Perpustakaan
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

    public function getBuku()
    {
        return $this->buku;
    }

    public function getInfoBuku($index)
    {
        return "Judul Buku : {$this->buku[$index]['judul']} | ISBN : {$this->buku[$index]['isbn']} | Penulis : {$this->buku[$index]['penulis']}";
    }
}

// Kondisi pengunjung
class Pengunjung extends Perpustakaan
{
    public function datang($nama)
    {
        return "Selamat Datang $nama" . "\n";
    }

    public function pulang()
    {
        return "Terimakasih Sudah Berkunjung" . "\n";
    }
}

// Kelola
class kelolaPinjaman extends Perpustakaan
{
    public function bacaBuku($nama)
    {
        return "Selamat Membaca $nama";
    }

    public function pinjamBuku(int $index)
    {
        echo "Anda Telah Meminjam Buku, {$this->getInfoBuku($index)}" . "\n";

        // print_r($this->buku);

        array_splice($this->buku, ($index - 1), 1);

        echo "Kembalikan sebelum " . date("d-", time() + 172800) . date("m-Y")  . "\n";
        // print_r($this->buku);
    }

    public function kembalikanBuku()
    {
        // print_r($this->buku);
        echo "Terimakasih Sudah Mengembalikan Buku " . "\n";
    }
}
