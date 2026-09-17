# Proyek Praktikum Pemrograman Web - Laravel 13

Repositori ini berisi kode tugas dan praktikum mata kuliah Pemrograman Web menggunakan Laravel 13.

## Cara Menjalankan Proyek di Komputer Lokal

1. Clone repositori ini:
   git clone https://github.com/linafitriana-2/praktikum-laravel-C030325065.git

2. Masuk ke direktori proyek:
   cd praktikum-laravel-C030325065

3. Instal dependensi Composer:
   composer install

4. Salin file environment dan generate application key:
   cp .env.example .env
   php artisan key:generate

5. Konfigurasi database pada file `.env`, kemudian jalankan migrasi & seeder:
   php artisan migrate:fresh --seed

6. Jalankan server lokal:
   php artisan serve