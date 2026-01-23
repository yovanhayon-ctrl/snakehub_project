<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# ============================================

**TAHAP 1: PERSIAPAN & CEK ENVIRONMENT**

- Buka Terminal Laragon (Ctrl + Alt + T)
- Cek versi PHP
  php -v

- Cek versi Composer
  composer -v

- Cek versi Node.js
  node -v

- Cek versi NPM
  npm -v

**TAHAP 2: MEMBUAT PROJECT LARAVEL**

- Masuk ke folder root Laragon
  cd C:\laragon\www

- Buat project Laravel baru
  composer create-project laravel/laravel SNAKEHUB_PROJECT

- Masuk ke folder project
  cd SNAKEHUB_PROJECT

**TAHAP 3: KONFIGURASI ENVIRONMENT**

- Generate application key
  php artisan key:generate

- Copy file .env (jika belum ada)
  copy .env.example .env

- Edit file .env dengan konfigurasi berikut:
  APP_NAME="SNAKEHUB PROJECT"
  APP_ENV=local
  APP_DEBUG=true
  APP_URL=http://snakehub-project.test

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=snakehub_db
DB_USERNAME=root
DB_PASSWORD=

**TAHAP 4: MEMBUAT DATABASE**

- Buka HeidiSQL via Laragon Menu
  Klik kanan icon Laragon > Database > HeidiSQL

- Buat database baru dengan nama: snakehub_db
  Klik kanan pada koneksi > Create new > Database > Ketik: snakehub_db > OK

**TAHAP 5: INSTALL LARAVEL BREEZE**

- Install Breeze package
  composer require laravel/breeze --dev

- Install Breeze scaffolding dengan Blade
  php artisan breeze:install blade

- Pilihan saat install:
  Stack: blade (tekan Enter)
  Dark mode: no (atau yes)
  Testing: Pest (tekan Enter)

**TAHAP 6: INSTALL NPM DEPENDENCIES**

- Install semua package Node.js
  npm install

- Build assets untuk development
  npm run dev

- CATATAN: Biarkan terminal ini tetap berjalan!
  Buka terminal baru untuk command selanjutnya (Ctrl + Alt + T)

**TAHAP 7: MIGRASI DATABASE**

- Masuk ke folder project di terminal baru
  cd C:\laragon\www\SNAKEHUB_PROJECT

- Jalankan migration untuk membuat tabel
  php artisan migrate

- Jika ingin reset database dan migrate ulang
  php artisan migrate:fresh

**TAHAP 8: MENJALANKAN PROJECT**

**METODE 1: Menggunakan Laragon (RECOMMENDED)**

- Pastikan Laragon sudah running (Start All)
- Buka terminal (Ctrl + Alt + T)
- Masuk ke folder project
  cd C:\laragon\www\SNAKEHUB_PROJECT

- Jalankan Vite untuk compile assets (Terminal 1)
  npm run dev

- Akses di browser
  http://snakehub-project.test

- CATATAN: Biarkan terminal npm run dev tetap berjalan!

**METODE 2: Menggunakan PHP Artisan Serve**

- Terminal 1 - Jalankan Laravel Server
  cd C:\laragon\www\SNAKEHUB_PROJECT
  php artisan serve

- Terminal 2 - Jalankan Vite (Buka terminal baru)
  cd C:\laragon\www\SNAKEHUB_PROJECT
  npm run dev

- Akses di browser:
  http://127.0.0.1:8000 atau http://localhost:8000

**METODE 3: Custom Port untuk Artisan Serve**

- Jika port 8000 sudah digunakan
  php artisan serve --port=8001

- Akses di browser:
  http://127.0.0.1:8001

**TAHAP 9: TESTING AUTHENTICATION**

- Akses halaman register di browser:
  http://snakehub-project.test/register

- Isi form registrasi:
  Name: Admin Test
  Email: admin@test.com
  Password: password123
  Confirm Password: password123
  Klik tombol Register

- Akses halaman login di browser:
  http://snakehub-project.test/login

- Isi form login:
  Email: admin@test.com
  Password: password123
  Klik tombol Login

- Akses dashboard (setelah login):
  http://snakehub-project.test/dashboard

**CARA MENJALANKAN PROJECT SETELAH RESTART**

- Setiap kali membuka project:

1. Start Laragon (jika belum)
2. Buka terminal Laragon (Ctrl + Alt + T)

cd C:\laragon\www\SNAKEHUB_PROJECT

- Jalankan npm dev
  npm run dev

- Akses browser
  http://snakehub-project.test

**CARA STOP/MATIKAN PROJECT**

- Stop npm run dev
  Tekan: Ctrl + C di terminal yang menjalankan npm run dev

- Stop php artisan serve (jika menggunakan)
  Tekan: Ctrl + C di terminal yang menjalankan php artisan serve

- Stop Laragon
  Klik kanan icon Laragon > Stop All

**WORKFLOW DEVELOPMENT HARIAN**

- Langkah 1: Start Laragon
  Klik Start All di Laragon

- Langkah 2: Buka Terminal (Ctrl + Alt + T)
  cd C:\laragon\www\SNAKEHUB_PROJECT

- Langkah 3: Run Vite Dev Server
  npm run dev
  (Biarkan terminal ini tetap berjalan)

- Langkah 4: Buka Browser
  http://snakehub-project.test

- Langkah 5: Coding di VS Code
  Klik kanan icon Laragon > Quick app > Code

- Langkah 6: Testing
  Buat perubahan di code, refresh browser
  Hot reload otomatis dengan Vite

- Langkah 7: Selesai Coding
  Tekan Ctrl + C di terminal npm run dev
  Stop Laragon atau biarkan tetap jalan

**PERINTAH TAMBAHAN & HELPFUL COMMANDS**

- Membuat Controller
  php artisan make:controller NamaController

- Membuat Model
  php artisan make:model NamaModel

- Membuat Migration
  php artisan make:migration create_nama_table

- Membuat Seeder
  php artisan make:seeder NamaSeeder

- Jalankan Seeder
  php artisan db:seed

- Clear cache aplikasi
  php artisan cache:clear

- Clear config cache
  php artisan config:clear

- Clear route cache
  php artisan route:clear

- Clear view cache
  php artisan view:clear

- Optimize aplikasi
  php artisan optimize

- Rollback migration terakhir
  php artisan migrate:rollback

- Rollback semua migration
  php artisan migrate:reset

- Build assets untuk production
  npm run build

- List semua routes
  php artisan route:list

- Tinker (REPL untuk testing code)
  php artisan tinker

**TROUBLESHOOTING COMMANDS**

- Jika ada masalah autoload
  composer dump-autoload

- Clear semua cache sekaligus
  php artisan optimize:clear

- Recreate storage link
  php artisan storage:link

- Check environment
  php artisan about

- Clear NPM cache
  npm cache clean --force

- Reinstall NPM packages
  rm -rf node_modules
  npm install

**STRUKTUR FOLDER PENTING**

app/Http/Controllers/ - Controllers
app/Models/ - Models
database/migrations/ - Migration files
resources/views/ - Blade templates
resources/views/auth/ - Login & Register views
routes/web.php - Web routes
routes/auth.php - Auth routes (dari Breeze)
public/ - Public assets
storage/ - Storage files
.env - Environment config

**URL PENTING**

Homepage: http://snakehub-project.test
Register: http://snakehub-project.test/register
Login: http://snakehub-project.test/login
Dashboard: http://snakehub-project.test/dashboard
Logout: http://snakehub-project.test/logout (POST)

**CATATAN PENTING**

1. Pastikan Laragon sudah running (Apache + MySQL)
2. Jalankan "npm run dev" di satu terminal (biarkan tetap berjalan)
3. Gunakan terminal kedua untuk command artisan
4. Virtual host otomatis dibuat oleh Laragon
5. Database credentials default Laragon: root / (kosong)
6. Reload Laragon jika virtual host tidak berfungsi

**QUICK SETUP (Copy-Paste Semua)**

- Setup lengkap dalam satu rangkaian command:
  cd C:\laragon\www && ^
  composer create-project laravel/laravel SNAKEHUB_PROJECT && ^
  cd SNAKEHUB_PROJECT && ^
  php artisan key:generate && ^
  composer require laravel/breeze --dev && ^
  php artisan breeze:install blade && ^
  npm install && ^
  php artisan migrate

- Setelah setup selesai, jalankan:
  npm run dev

- Akses di browser:
  http://snakehub-project.test

**COMMAND UNTUK BUILD PRODUCTION**

- Build assets untuk production (minified)
  npm run build

- Build dan watch untuk perubahan
  npm run watch

# Cara run

- Di Terminal Laragon (Layar Hitam), pastikan server masih jalan. Kalau mati, ketik:
C:\laragon\www\snakehub_project
  php artisan serve

- Di Terminal VS Code, ketik:
  Catatan kalo di Poweshell pakai ini:
  Set-ExecutionPolicy -ExecutionPolicy RemoteSigned -Scope Process
  npm run dev

- Buka Google Chrome atau Edge, lalu akses:
  http://127.0.0.1:8000
  
