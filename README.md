# Laravel API CRUD - Data Management

Project ini dibuat sebagai bagian dari assessment tes.

## ✅ Fitur
- 🔧 Migrasi database `posts` otomatis
- 📦 Seeder dengan 50 data dummy (judul dan konten acak)
- 🔄 Operasi CRUD lengkap via API dan Web
- 📄 Pagination otomatis (10 data per halaman)
- 🧪 API dapat diakses dan diuji menggunakan Postman
- 🖥️ UI Laravel dengan Blade & Bootstrap

## 📂 Konfigurasi Database

Edit file .env:

- Jika menggunakan mysql:
   ```bash
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nama-database
   DB_USERNAME=root
   DB_PASSWORD=

## 📦 Instalasi

1. Clone repo ini:
   ```bash
   git clone https://github.com/username/laravel-api-data.git
   cd laravel-api-data
2. Install depedensi:
   ```bash
   composer install
3. Copy file .env lalu koneksikan ke database lokal:
   ```bash
   cp .env.example .env
   php artisan key:generate
4. Jalankan migrasi dan seeder:
   ```bash
   php artisan migrate --seed
5. Jalankan server:
   ```bash
   php artisan serve

## 🌐 Antarmuka Web (Blade)
📍 Akses melalui: localhost:xxxx/posts

## 🧪 Dokumentasi API (Postman)
📥 [Unduh koleksi Postman](./API.postman_collection.json)

## Author: Amal Fillah
