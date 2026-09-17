# Proyek Praktikum Pemrograman Web - Laravel 13

Repositori ini berisi kode tugas dan praktikum mata kuliah Pemrograman Web menggunakan Laravel 13.

## Cara Menjalankan Proyek

1. Clone repositori:
   git clone https://github.com/linafitriana-2/praktikum-laravel-C030325065.git
2. Masuk direktori:
   cd praktikum-laravel-C030325065
3. Instal dependensi:
   composer install
4. Salin environment:
   cp .env.example .env
   php artisan key:generate
5. Migrasi database:
   php artisan migrate:fresh --seed
6. Jalankan server:
   php artisan serve