# Laravel API CRUD - Data Management

Project ini dibuat sebagai bagian dari assessment tes.

## ✅ Fitur
- 🔧 Migrasi database `posts` otomatis
- 📦 Seeder dengan 50 data dummy (judul dan konten acak)
- 🔄 Operasi CRUD lengkap via API dan Web
- 📄 Pagination otomatis (10 data per halaman)
- 🧪 API dapat diakses dan diuji menggunakan Postman
- 🖥️ UI Laravel dengan Blade & Bootstrap

## 📂 Konfigurasi

Edit file .env:
- Generate key
  ```bash
  APP_NAME=Laravel
  APP_ENV=local
  APP_KEY=base64:xxxxxxxxx
  APP_DEBUG=true
  APP_URL=http://localhost

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
   git clone https://github.com/AmalFillah02/laravel-crud-api.git
   cd laravel-api-data
2. Install depedensi:
   ```bash
   composer install
3. Copy file .env lalu koneksikan ke database lokal:
   ```bash
   cp .env.example .env
4. generate key:
   ```bash
   php artisan key:generate
4. migrasi database:
   ```bash
   php artisan migrate
5. Jalankan server:
   ```bash
   php artisan serve

## 🌐 Antarmuka Web (Blade)
📍 Akses melalui: localhost:xxxx/posts

## 🧪 Dokumentasi API (Postman)
📥 [Unduh koleksi Postman](./API.postman_collection.json)

## Author: Amal Fillah
