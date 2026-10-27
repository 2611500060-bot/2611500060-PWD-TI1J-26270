# pertemuan-06
# Pertemuan 6 — PHP Dasar dan Pemrograman Sisi Peladen

## Identitas

- Nama: Defi Evraliyani
- NIM: 2611500060
- Program Studi: Teknik Informatika
- Mata Kuliah: Pemrograman Web Dasar
- Tahun Akademik: 2026/2027
- Pertemuan: 6

## Deskripsi

Pada Pertemuan 6, saya mempelajari dasar-dasar PHP sebagai bahasa pemrograman sisi peladen. Saya melanjutkan proyek dari Pertemuan 5 dengan menyalin berkas ke folder `pertemuan-06/` dan mengubah halaman utama dari `index.html` menjadi `index.php`.

PHP digunakan untuk menampilkan informasi mahasiswa secara dinamis, sedangkan HTML, CSS, dan JavaScript tetap digunakan untuk membangun tampilan dan interaksi halaman web.

## Tujuan Pembelajaran

1. Memahami cara menjalankan PHP melalui peladen lokal.
2. Menggunakan variabel, konstanta, dan tipe data PHP.
3. Menerapkan operator aritmetika, perbandingan, dan logika.
4. Memahami percabangan `if`, `elseif`, `else`, dan `switch`.
5. Menggunakan perulangan `for` dan `while`.
6. Menerapkan fungsi bawaan PHP untuk menampilkan informasi.
7. Menjalankan proyek melalui localhost dan mengelola perubahan dengan GitHub.

## Struktur Folder

```text
pertemuan-06/
├── index.php
├── style.css
├── script.js
├── foto-profil.jpg
└── README.md
```

## Perubahan yang Dikerjakan

### 1. Variabel dan Konstanta

Saya membuat variabel untuk menyimpan data mahasiswa, seperti nama, NIM, program studi, tahun akademik, semester, IPK, dan status aktif. Saya juga menggunakan konstanta untuk menyimpan nama mata kuliah dan informasi akun GitHub.

### 2. Operator dan Percabangan

Saya menggunakan operator aritmetika untuk menghitung sisa semester serta operator perbandingan dan logika untuk memeriksa kondisi semester. Percabangan `if`, `elseif`, dan `else` digunakan untuk menentukan kategori semester, sedangkan `switch` digunakan untuk menentukan fokus program studi.

### 3. Perulangan

Saya menggunakan perulangan `for` untuk menampilkan lima target belajar dan perulangan `while` untuk menampilkan tiga nomor semester. Dengan perulangan tersebut, informasi dapat ditampilkan secara berurutan tanpa menulis setiap baris secara manual.

### 4. Fungsi PHP dan Formulir

Saya menggunakan `number_format()` untuk menampilkan IPK dengan dua angka desimal dan `date("Y")` untuk menampilkan tahun pada footer. Saya juga menggunakan sintaks `<?= ... ?>` untuk menampilkan nilai variabel ke dalam HTML.

Formulir kontak tetap dipertahankan dengan kolom nama, email, semester, tanggal kunjungan, jenis pesan, program studi, dan pesan. Formulir ini belum digunakan untuk menyimpan data ke basis data.

### 5. Tautan GitHub

Saya menambahkan tautan menuju repositori GitHub proyek saya:

https://github.com/2611500060-bot/2611500060-PWD-TI1J-26270

Tautan tersebut dapat digunakan untuk melihat berkas proyek yang telah dikerjakan.

## Cara Menjalankan Proyek

1. Simpan folder `pertemuan-06/` di dalam direktori `C:\laragon\www\`.
2. Buka aplikasi Laragon dan tekan **Start All**.
3. Pastikan layanan web sudah berjalan.
4. Buka browser dan akses alamat berikut:

   `http://localhost/pertemuan-06/`

5. Periksa apakah halaman profil tampil dengan benar.

PHP harus dijalankan melalui peladen lokal agar kode PHP dapat diproses oleh server.

## Pengujian

Pengujian dilakukan untuk memeriksa tampilan profil, perhitungan sisa semester, keterangan semester, nama program studi, lima target belajar, tiga nomor semester, IPK, dan tautan GitHub.

Saya juga dapat mengubah nilai variabel sementara untuk memeriksa hasil percabangan, kemudian mengembalikannya ke nilai awal.

Catatan hasil pengujian:

- Tanggal pengujian: [Isi tanggal]
- Alamat localhost: [Isi alamat yang digunakan]
- Hasil pengujian: [Isi sesuai hasil yang terlihat]
- Galat atau perbaikan: [Isi jika ada]

## Git dan GitHub

Setelah menyelesaikan perubahan, saya memeriksa status berkas menggunakan perintah:

```bash
git status
```

Kemudian, saya dapat menyimpan dan mengirim perubahan menggunakan perintah berikut:

```bash
git add .
git commit -m "menyelesaikan praktikum PHP pertemuan 6"
git push
```

## Kesimpulan

Pada Pertemuan 6, saya mempelajari penerapan PHP untuk membuat halaman profil mahasiswa yang menampilkan informasi secara dinamis. Saya menerapkan variabel, konstanta, operator, percabangan, perulangan, dan fungsi bawaan PHP. Saya juga mempelajari cara menjalankan proyek melalui Laragon dan localhost serta mengelola perubahan kode menggunakan Git dan GitHub.