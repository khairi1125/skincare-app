# Skincare Product CRUD App (Laravel)

Aplikasi web sederhana berbasis Laravel untuk mengelola data produk skincare.
Project ini dibuat sebagai latihan memahami konsep CRUD (Create, Read, Update, Delete) serta implementasi dasar Laravel mulai dari setup hingga deployment lokal.

---

# Deskripsi Project

Aplikasi ini memungkinkan pengguna untuk:

* Menambahkan data produk skincare
* Menampilkan daftar produk
* Mengedit data produk
* Menghapus data produk

Project ini juga menerapkan konsep:

* MVC (Model-View-Controller)
* Routing
* Migration & Database
* File Upload
* UI dengan Bootstrap

---

# Tools & Teknologi yang Digunakan

* PHP (minimal versi 8+)
* Laravel 13
* MySQL
* XAMPP (Apache & MySQL)
* Composer
* Visual Studio Code
* Link Bootstrap 5 (untuk tampilan desain)

---

# Instalasi & Setup Project

## 1. Install Tools

Pastikan sudah menginstall:

* XAMPP
* Composer
* Visual Studio Code

---

## 2. Membuat Project Laravel

Buka terminal:

```bash
composer create-project laravel/laravel skincare-app
cd skincare-app
```

---

## 3. Menjalankan Project

```bash
php artisan serve
```

Buka browser:

```
http://127.0.0.1:8000
```

---

# Setup Database

## 1. Buat Database

Buka phpMyAdmin:

```
http://localhost/phpmyadmin
```

Buat database:

```
skincare_db
```

---

## 2. Konfigurasi `.env`

Edit file `.env`:

```env
DB_DATABASE=skincare_db
DB_USERNAME=root
DB_PASSWORD=
```

---

## 3. Jalankan Migration

```bash
php artisan migrate
```

---

# Pembuatan Model & Migration

```bash
php artisan make:model Produk -m
```

---

## Struktur Tabel Produk

```php
Schema::create('produks', function (Blueprint $table) {
    $table->id();
    $table->string('nama_produk');
    $table->integer('harga');
    $table->integer('stok');
    $table->string('kategori');
    $table->text('deskripsi');
    $table->date('tanggal_expired');
    $table->string('gambar_produk')->nullable();
    $table->timestamps();
});
```

---

## Jalankan Migration

```bash
php artisan migrate
```

---

# Model (Produk.php)

```php
protected $fillable = [
    'nama_produk',
    'harga',
    'stok',
    'kategori',
    'deskripsi',
    'tanggal_expired',
    'gambar_produk'
];
```

---

# Controller (CRUD)

Buat controller:

```bash
php artisan make:controller ProdukController --resource
```

---

## Fungsi yang Digunakan:

* `index()` → menampilkan data
* `create()` → form untuk menambahkan produk
* `store()` → simpan data + upload gambar
* `edit()` → form untuk  mengedit data produk
* `update()` → update data + ganti gambar
* `destroy()` → hapus data

---

# Routing

Di `routes/web.php`:

```php
Route::resource('produk', ProdukController::class);
```

---

# Tampilan (View)

Folder:

```
resources/views/produk
```

File yang dibuat:

* `create.blade.php`
* `index.blade.php`
* `edit.blade.php`

---

# Fitur CRUD

## Create

* Input data produk
* Upload gambar
* Disimpan ke database

---

## Read

* Menampilkan data produk dalam tabel
* Menampilkan gambar produk

---

## Update

* Edit data produk
* Ganti gambar produk

---

## Delete

* Hapus data produk
* Menggunakan konfirmasi sebelum delete

---

# Upload & Penyimpanan Gambar

* Folder penyimpanan:

```
public/images
```

* Gambar disimpan dengan nama unik menggunakan `time()`

---

# UI (User Interface)

* Menggunakan Bootstrap 5
* Tabel data produk
* Form input rapi
* Tombol aksi:

  * Edit
  * Hapus
  * Kembali

---

# Struktur Folder Penting

```
app/
 └── Models/
     └── Produk.php

app/Http/Controllers/
 └── ProdukController.php

resources/views/produk/
 ├── index.blade.php
 ├── create.blade.php
 └── edit.blade.php

database/migrations/
 └── create_produks_table.php

public/images/
```

---

# Cara Menjalankan Project

```bash
php artisan serve
```

Akses:

```
http://127.0.0.1:8000/produk
```

---

# Author

* Nama: Khairi Ihza Mahendra
* Jurusan: Sistem Informasi
* Project: Tugas CRUD Laravel

---

# Kesimpulan

Project ini berhasil mengimplementasikan:

* CRUD lengkap
* Upload & manipulasi file
* Penggunaan MVC Laravel
* UI sederhana namun fungsional

Project ini sangat cocok sebagai:

* Tugas kuliah
* Portfolio awal web development

---

**Status: Project selesai & berjalan dengan baik**
