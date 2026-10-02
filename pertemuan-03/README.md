# pertemuan-03
# Pertemuan 3 - Formulir HTML dan CSS Dasar

## Baseline

- Menggunakan hasil P2 sebagai dasar pengembangan P3.
- Menyalin `index.html` dan `img/foto-profil.jpg` ke `pertemuan-03/`.

## Implementasi Formulir

- Elemen form yang digunakan: `<form>`, `<label>`, `<input>`, `<button>`
- Tipe input yang digunakan: `text`, `email`, `number`, `submit`, `reset`
- Atribut validasi yang digunakan: `required`, `placeholder`

## Pengujian GET dan POST

- Hasil pengujian GET: Data yang diisi pada formulir dikirimkan melalui URL sebagai query string dan halaman berhasil dimuat ulang.
- Contoh URL encoding yang ditemukan: `index.html?nama=Mahasiswa&email=nama%40email.com&semester=3`
- Hasil pengujian POST: Terjadi galat `405 Not Allowed` dari GitHub Pages karena tidak terdapat pemrosesan server-side pada hosting statis.

## CSS Dasar

- Selector elemen: `p`, `h2`, `h3`, `ol`
- Selector class: `.form-group`
- Selector ID: `#about`
- Properti CSS dasar yang digunakan: `background-color`, `border`, `padding`, `margin`, `font-family`, `color`, `border-bottom`

## Pengujian dan Perbaikan

- Galat yang ditemukan: Pesan error `405 Not Allowed` saat pengujian metode POST.
- Penyebab galat: GitHub Pages hanya mendukung file statis dan tidak mendukung pemrosesan form dengan metode POST.
- Perbaikan yang dilakukan: Mengembalikan atribut method pada elemen `<form>` dari `method="post"` menjadi `method="get"`.
- Hasil pengujian ulang: Formulir kembali berjalan normal menggunakan metode GET dan parameter dapat diamati pada URL.

## GitHub Pages

- URL GitHub Pages: https://2611500060-bot.github.io/2611500060-PWD-TI1J-26270/pertemuan-03/index.html
-