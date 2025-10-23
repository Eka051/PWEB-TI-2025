<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# How to Clone This Repository

## 1) Clone repositori

Buka **Git Bash** lalu ketik:

```bash
git clone https://github.com/Eka051/PWEB-TI-2025.git
```

---

## 2) Buka di Visual Studio Code

Masuk ke folder proyek lalu buka dengan VS Code:

```bash
cd PWEB-TI-2025
code .
```

---

## 3) Jalankan perintah di Terminal VS Code

Buka **Terminal** (View → Terminal) kemudian eksekusi berurutan:

**3.1.** Instal dependensi PHP

```bash
composer install
```

**3.2.** Refresh autoload Composer (opsional, tapi aman dijalankan)

```bash
composer dump-autoload
```

**3.3.** Duplikasi file environment

* macOS/Linux:

```bash
cp .env.example .env
```

* Windows (PowerShell):

```powershell
copy .env.example .env
```

**3.4.** Generate APP_KEY

```bash
php artisan key:generate
```

**3.5. (Opsional, jika pakai database)** Migrasi + seeder

```bash
php artisan migrate --seed
```

> Pastikan pengaturan database di `.env` sudah benar sebelum migrasi.

**3.6. (Opsional, jika ada upload/storage)** Buat symlink storage

```bash
php artisan storage:link
```

**3.7.** Instal dependensi frontend

```bash
npm install
```

**3.8.** Jalankan Vite (pilih salah satu)

* mode pengembangan (auto-reload):

```bash
npm run dev
```

* build produksi:

```bash
npm run build
```

**3.9.** Jalankan server Laravel

```bash
php artisan serve
```

Akses web di: [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

atau (recommended)

```bash
composer run dev
```

untuk menjalankan php & vite

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
