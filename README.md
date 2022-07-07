# Cara menjalankan aplikasi

## Requirement

`composer`

### `1. Clone project`

Clone project dari repository terlebih dahulu dengan perintah `git clone`. Untuk mode `https`, gunakan perintah `git clone https://github.com/adam034/lnk-calculator.git`. Sedangkan untuk mode `ssh`, gunakan perintah `git clone git@github.com:adam034/lnk-calculator.git`. Setelah itu, buat file `.env` pada root directori, dan copy kan isi dari file `.env.example` ke file `.env`

### `2. Install package`

Install terlebih dahulu package yang akan digunakan dengan perintah `composer install`

### `3. Jalankan Aplikasi`

Setelah package selesai terinstall, jalankan perintah `php artisan serve ` untuk menjalankan program. Sebelum menjalankan aplikasi, Service API harus di jalankan terlebih dahulu. File ada di sini [API](https://github.com/adam034/lnk-api)

### `4 Akses Aplikasi`

Setelah itu, aplikasi bisa diakses melalui `http://localhost:8000/statistik`
