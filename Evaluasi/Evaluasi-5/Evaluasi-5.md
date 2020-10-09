## Ketentuan dan peraturan selama mengerjakan :

* Kosongkan setiap tab pada code editor masing-masing, dicode editor hanya ada
* Manfaatkan waktu 5 menit terakhir untuk push ke repository masing-masing di github
* Kerjakan dengan jujur dan penuh keyakinan
* Jangan pesimis dan OPTIMIS lah
* Jangan Banyak Ngeluh
* 1 menit sebelum mengerjakan evaluasi harap dipersiapkan folder dan `file.php`, jika terlambat maka tanggung resiko nya dan terpaksa harus ditinggalkan
* Manfaatkan stackoverflow, w3school, dan php.net sebagai teman yang baik dalam mengerjakan setiap soal
* Dilarang keras untuk bekerja sama
* Run program timer saat ujian dimulai
* Idealis lah dengan diri sendiri jangan mau ketinggalan
* FOKUS!!!

## Evaluasi 5

1. Buatlah sebuah project php dengan menggunakan composer.
2. Tambahkan library / package `guzzlehttp/guzzle`.
3. Pelajari dan gunakan library `guzzle` untuk melakukan login ke link (endpoint-api) berikut : [POST] https://api.pondokprogrammer.com/api/student_login.
   - Parameter login : 
      - email
      - password

_clue_ :
- Gunakan function `json_decode()` untuk mengubah tipe data response dari string ke object (mendapatkan nilai dari response).

4. Jadikan dirimu hadir dalam kelas `Evaluasi-5` melalui link (endpoint-api) berikut : [POST] https://api.pondokprogrammer.com/class/qr?class_id=85
   - Tambahkan header request seperti di bawah ini :
      - Authorization : bearer (spasi) $token

_clue_ :
- $token diambil dari response endpoint-api saat login.

## Nilai tambah
   * Tampilan halaman login.
   * Tampilan untuk (button) kirim absensi kelas.

## Gambaran Besar Masalah

Ketika client login maka direct ke halaman input data santri lalu sang client bisa input data, edit data, hapus data, dalam masalah ini ketika client sudah login maka tidak perlu mengulang login jika aplikasi sudah di close (Gunakan session)

## _Catatan_ :

## Jangan mau hanya menjadi biasa-biasa saja dalam mengerjakan suatu hal, buatlah sesuatu dengan cara efisin, dan seefektif mungkin

**KEJARLAH NILAI SEMPURNA**
