<?php

class Santri
{
    //  Nilai default agar fungsi hapus dan ubah bisa dijalankan tanpa harus menjalankan keseluruhan

    protected static $santri = [
        1 => [              // <== Index di set 1 untuk mempermudah proses function construct
            "nama" => "Hanif",
            "nik" => 123,
            "divisi" => "Backend"
        ],
        [
            "nama" => "Usman",
            "nik" => 456,
            "divisi" => "Among us"
        ],
        [
            "nama" => "David",
            "nik" => 182,
            "divisi" => "Mobile"
        ]
    ];

    public function __construct()
    {
        echo "- Daftar Santri : \n";
        for ($i = 1; $i <= count(self::$santri); $i++) {
            echo "$i. " . self::$santri[$i]['nama'] . ", NIK : " . self::$santri[$i]["nik"] .  "\n";
        }
    }
}

class Kelola extends Santri
{
    public static function register(int $jumlah)
    {
        if ($jumlah == null) {
            throw new Exception("Oops Inputan Tidak Boleh Kosong ! \n", 1);
        }

        for ($i = 1; $i <= $jumlah; $i++) {
            echo "- Data Ke $i\n";
            echo "Masukkan Nama : ";
            $data["nama"] = trim(fgets(STDIN));
            echo "Masukkan NIK : ";
            $data["nik"] = trim(fgets(STDIN));
            echo "Masukkan Divisi : ";
            $data["divisi"] = trim(fgets(STDIN));

            self::$santri[] = $data;
        }

        print_r(self::$santri);

        return "Data berhasil Ditambahkan !\n";
    }

    public function delete(int $index)
    {

        if ($index > count(self::$santri) or $index <= 0) {
            throw new Exception("Oops Inputan Anda Salah !\n", 1);
        }

        array_splice(self::$santri, $index - 1, 1); // $index - 1 karena fungsi ini menghiraukan index yang sudah diset diawal 

        print_r(self::$santri);

        return "Data Santri Berhasil Dihapus !\n";
    }

    public function update(int $index)
    {
        if ($index > count(self::$santri) or $index <= 0) {
            throw new Exception("Oops Inputan Anda Salah !\n", 1);
        }

        echo "Ubah Nama : ";
        $data["nama"] = trim(fgets(STDIN));
        echo "Ubah NIK : ";
        $data["nik"] = trim(fgets(STDIN));
        echo "Ubah Divisi : ";
        $data["divisi"] = trim(fgets(STDIN));


        $x[] = $data;
        // print_r($x);

        array_splice(self::$santri, $index - 1, 1, $x);

        print_r(self::$santri);

        return "Data Berhasil Diubah !\n";
    }
}

// Program Berjalan di file run.php