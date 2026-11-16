# Pertemuan 09

Pada Pertemuan 09, saya melanjutkan dan mengembangkan kembali artefak dari pertemuan sebelumnya. Artefak P7 saya salin ke P9 untuk dijadikan baseline, lalu saya menguji halaman melalui alamat:

`http://localhost/pwd/2611500060-PWD-TI1J-26270/pertemuan-09/`

Setelah diuji, fitur-fitur yang sudah dibuat tetap berfungsi. Saya juga belajar beberapa hal berikut:

1. Membuat variabel yang berisi array dan mengisi array dengan beberapa data.
2. Mengambil data dari array menggunakan indeks. Saat mencoba, saya menemukan bahwa indeks array dimulai dari 0, bukan 1.
3. Mengakses data array berdasarkan indeks tertentu, misalnya `$contohArray[0]`.
4. Membuat array asosiatif yang menyimpan data dalam pasangan nama kunci dan nilai.
5. Mengambil nilai dari array asosiatif menggunakan nama kuncinya.
6. Menggunakan perulangan `foreach` untuk menampilkan isi array satu per satu.
7. Membuat fungsi PHP menggunakan kata kunci `function`.
8. Memanggil fungsi yang sudah dibuat dan menggunakan nilai yang dikembalikan oleh fungsi tersebut.
9. Membuat fungsi `bersihkan()` untuk mengamankan teks sebelum ditampilkan ke halaman.
10. Menggunakan `htmlspecialchars()` di dalam fungsi `bersihkan()` agar karakter khusus pada teks tidak dibaca sebagai kode HTML.
11. Memisahkan fungsi-fungsi PHP ke dalam file `fungsi.php` supaya kode lebih teratur.
12. Memanggil file `fungsi.php` menggunakan `include_once`.
13. Menggunakan kembali fungsi dari file `fungsi.php` di halaman utama.
14. Menggunakan fungsi validasi formulir untuk memeriksa data yang dikirim sebelum disimpan.
15. Menyimpan data formulir ke dalam session agar data masih dapat ditampilkan setelah halaman dialihkan.
16. Menggunakan redirect setelah formulir dikirim dengan metode POST.
17. Menampilkan kembali data yang sudah disimpan di session ke halaman.
18. Menjaga agar data yang dimasukkan pengguna tetap terisi kembali pada formulir setelah proses validasi.
19. Menampilkan pesan kesalahan jika data yang dimasukkan belum sesuai.
20. Menggunakan array untuk menyimpan data formulir, seperti nama, email, semester, tanggal kunjungan, jenis pesan, program studi, minat, dan pesan.
21. Memeriksa agar data minat yang dipilih berbentuk array sebelum ditampilkan.
22. Menggunakan `in_array()` untuk mengetahui apakah pilihan minat tertentu dipilih.
23. Menggunakan `count()` untuk menghitung jumlah pilihan minat.
24. Menampilkan data formulir dengan perulangan `foreach` agar penulisan kode lebih ringkas.
25. Menggunakan `nl2br()` supaya baris baru pada pesan tetap terlihat saat ditampilkan di halaman.
26. Menguji formulir dengan mengisi data yang benar dan mencoba beberapa data yang tidak sesuai.
27. Memeriksa kembali hasil yang muncul di halaman setelah formulir dikirim.

Dari pertemuan ini, saya belajar bahwa array dan fungsi dapat membantu mengelola data serta membuat kode PHP lebih mudah digunakan kembali. Saya juga memahami bahwa memisahkan fungsi ke file `fungsi.php` membuat kode lebih teratur dan mudah dibaca. Selain itu, session membantu menyimpan data sementara sehingga hasil formulir dapat ditampilkan kembali setelah proses redirect.