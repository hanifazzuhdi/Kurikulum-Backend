<?php

require 'evaluasi2.php';

echo "==============================\n";
echo "|  PROGRAM PENDATAAN SANTRI  |\n";
echo "|      Evaluasi 2 HANIF      |\n";
echo "==============================\n";

echo "1. Tambah Santri \n2. Hapus Santri \n3. Ubah Data Santri\n";
echo "Pilih yang ingin dilakukan (Masukkan Angka) : ";
$pilih = trim(fgets(STDIN));

echo "=============================\n";

switch ($pilih) {
        // INSERT
    case '1':
        echo "Register Berapa Santri ? : ";
        $jumlah = trim(fgets(STDIN));
        // try
        try {
            echo Kelola::register($jumlah);
        } catch (Exception $error) {
            echo $error->getMessage();
        }

        break;
    case '2':
        // DELETE
        $santri = new Kelola;

        echo "Pilih Santri yang ingin dihapus (Masukkan Angka) :  ";
        $hapus = trim(fgets(STDIN));

        try {
            echo $santri->delete($hapus);
        } catch (Exception $error) {
            echo $error->getMessage();
        }

        break;
    case '3':
        // UPDATE
        $santri = new Kelola;

        echo "Pilih Santri yang ingin diubah datanya (Masukkan Angka) : ";
        $ubah = trim(fgets(STDIN));

        echo "=============================\n";

        try {
            echo $santri->update($ubah);
        } catch (Exception $error) {
            echo $error->getMessage();
        }

        break;
    default:
        echo "Inputan yang anda masukkan SALAH ! \n";
        break;
}
