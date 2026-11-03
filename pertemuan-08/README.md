# PERTEMUAN-07

1. Menyalin artefak P6 untuk dijadikan baseline P7.
2. Menguji fitur pada P7 untuk memastikan halaman website berjalan seperti pada P6.
3. Menggunakan `event.preventDefault()` pada `script.js` untuk mengatur perilaku formulir saat dikirim.
4. Mencoba superglobal `$_POST` untuk menangkap nilai yang diisikan pada formulir.
5. Menggunakan method `POST` pada formulir untuk mengirimkan data ke halaman `index.php`.
6. Membuat formulir kontak yang berisi nama lengkap, email, semester, tanggal kunjungan, jenis pesan, topik yang diminati, program studi, dan pesan.
7. Menggunakan variabel PHP untuk menampung data yang dikirimkan melalui formulir.
8. Menggunakan operator `??` untuk memberikan nilai default apabila data formulir belum diisi.
9. Menggunakan fungsi `trim()` untuk menghapus spasi yang tidak diperlukan pada awal dan akhir input.
10. Menggunakan validasi PHP untuk memeriksa data yang diisikan oleh pengguna.
11. Memeriksa nama lengkap agar tidak kosong dan memiliki panjang 3 sampai 50 karakter.
12. Memeriksa format email menggunakan fungsi `filter_var()` dan `FILTER_VALIDATE_EMAIL`.
13. Memeriksa nilai semester agar berupa bilangan bulat antara 1 sampai 14.
14. Memeriksa format tanggal kunjungan menggunakan `DateTime::createFromFormat()`.
15. Menggunakan percabangan untuk memvalidasi jenis pesan dan program studi yang dipilih.
16. Menggunakan checkbox untuk memilih topik yang diminati, yaitu HTML dan CSS.
17. Menggunakan session PHP untuk menyimpan data formulir agar dapat ditampilkan kembali setelah proses redirect.
18. Menggunakan `header('Location: index.php')` untuk mengarahkan kembali halaman setelah formulir dikirim.
19. Menampilkan data yang diterima peladen dan pesan kesalahan apabila terdapat data formulir yang tidak sesuai.
20. Menguji kembali seluruh fitur P7 untuk memastikan formulir, validasi, session, navigasi, dan tampilan profil mahasiswa berjalan dengan baik.