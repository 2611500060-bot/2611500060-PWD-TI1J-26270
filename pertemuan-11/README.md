# Pertemuan 11 - Menampilkan Data Kontak dari Basis Data

## Hasil Pengujian Penyajian Data
- Data berhasil ditampilkan dari `tbl_kontak_2611500060` ke halaman Profil Mahasiswa.
- Data ditampilkan di 2 tempat: Artikel "Data Kontak dari Basis Data" dan Tabel "Kontak dari Database (P11)".

## Hasil Pengujian Kondisi Tanpa Data
- Tabel dikosongkan dengan `TRUNCATE TABLE tbl_kontak_2611500060;`
- Aplikasi berhasil menampilkan pesan "Belum ada data kontak yang tersimpan." di artikel dan tabel.
- Data berhasil dimasukkan kembali via fasilitas SQL (INSERT) dan tampil lagi.
1. menyalin artefak pertemuan - 10 ke pertemuan - 11 sebagai baseline
2. menyiapkan direktori dan lingkungan pengembangan pertemuan - 11
3. memeriksa kesiapan basis data dan tabel kontak P11
4. membuat berkas koneksi PHP- MySQL P11
5. menguji koneksi dari PHP ke MySQL dengan file sementara bernama uji_koneksi.php
6. menentukan parameter koneksi basis data P11
7. "menguji penanganan kegagalan koneksi PHP- MySQL"
8."menyiapkan pemuatan berkas koneksi pada P11"
9. "mengintegrasikan berkas koneksi pada index P11"
10. "memeriksa alur ketersediaan koneksi pada index P11"
11. "menguji integrasi koneksi PHP- MySQL pada index P11"
12. " menentukan kueri SELECT data kontak"
13. menjalankan kueri SELECT menggunakan MySQLi"
14. menambahkan pemeriksaan kegagalan kueri SELECT"
15. mengambil hasil SELECT menggunakan mysqli_fetch_assoc"
16. memeriksa hasil pengambilan data kontak"
17. "Menampilkan data kontak dari basis data"
18. "Menambahkan ekspor basis data praktikum"

