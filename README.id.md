<!-- portfolio -->
<!-- slug: php-student-crud -->
<!-- title: CRUD Siswa PHP -->
<!-- description: Aplikasi CRUD data siswa yang dibangun dengan PHP native dan MySQL untuk mempelajari dasar-dasar pengembangan web -->
<!-- image: https://github.com/daffa09/php_crud_siswa/assets/68214221/c26e3aa8-0684-4a96-bd30-bae37f9eec63 -->
<!-- tags: php, mysql, crud, bootstrap, manajemen-siswa -->

# Aplikasi CRUD Siswa PHP (PHP Student CRUD Application)

Sistem manajemen data siswa yang sederhana namun komprehensif, dibangun dengan PHP native dan MySQL. Proyek ini mendemonstrasikan operasi dasar CRUD (Create, Read, Update, Delete) dan dibuat selama perjalanan belajar saya di sekolah menengah.

## 📋 Ringkasan

Aplikasi manajemen data siswa ini memungkinkan sekolah untuk mengelola data siswa dengan efisien. Dibangun menggunakan PHP native tanpa framework, proyek ini berfungsi sebagai sarana belajar yang sangat baik untuk memahami fundamental pengembangan web dan operasi database.

![Pratinjau Aplikasi](https://github.com/daffa09/php_crud_siswa/assets/68214221/c26e3aa8-0684-4a96-bd30-bae37f9eec63)

## ✨ Fitur

- **Manajemen Siswa (CRUD)**
  - Menambah catatan siswa baru.
  - Menampilkan semua data siswa dalam tabel.
  - Mengedit informasi siswa yang sudah ada.
  - Menghapus catatan siswa.

- **Manajemen Data**
  - Nomor Induk Siswa (NIS).
  - Nama Siswa.
  - Kelas.
  - Alamat.
  - Nomor Telepon.
  - Tanggal Lahir.

- **Antarmuka Pengguna**
  - Desain bersih dan responsif.
  - Tata letak berbasis Bootstrap.
  - Tabel data dengan pengurutan.
  - Validasi formulir.
  - Notifikasi sukses/error.

## 🛠️ Teknologi yang Digunakan

- **PHP** (Native): Pemrograman sisi server.
- **MySQL**: Manajemen database.
- **Bootstrap**: Framework frontend.
- **HTML5 & CSS3**: Struktur dan gaya.
- **JavaScript**: Interaksi sisi klien.

## 📁 Struktur Proyek

```
php_crud_siswa/
├── src/
│   ├── index.php          # Halaman utama (melihat siswa)
│   ├── tambah.php         # Formulir tambah siswa
│   ├── edit.php           # Formulir edit siswa
│   ├── hapus.php          # Proses hapus siswa
│   ├── proses_tambah.php  # Proses penambahan data
│   ├── proses_edit.php    # Proses pembaruan data
│   └── koneksi.php        # Koneksi database
├── assets/                # File CSS & JS
├── databases/
│   └── uprakweb2020.sql   # Skema database
└── README.md
```

## 🚀 Memulai

### Prasyarat

- Lingkungan pengembangan PHP seperti **XAMPP**, **WAMP**, atau sejenisnya.
- PHP 7.0 atau lebih tinggi.
- MySQL 5.7 atau lebih tinggi.

### Langkah Instalasi

1. **Clone Repositori**
   ```bash
   git clone <repository-url>
   ```

2. **Pindahkan ke htdocs**
   Salin folder proyek ke direktori `htdocs` (XAMPP) atau `www` (WAMP).

3. **Buat Database**
   Buka phpMyAdmin dan buat database baru bernama `uprakweb2020`.

4. **Impor Database**
   Pilih database `uprakweb2020`, lalu impor file `databases/uprakweb2020.sql`.

5. **Konfigurasi Koneksi**
   Edit `src/koneksi.php` untuk menyesuaikan kredensial database Anda (host, user, pass, db).

6. **Akses Aplikasi**
   Buka browser dan arahkan ke: `http://localhost/php_crud_siswa/src`

## 🎓 Hasil Pembelajaran

Proyek ini mengajarkan saya:
- Pemrograman PHP native.
- Operasi database MySQL.
- Implementasi operasi CRUD.
- Penanganan formulir (form processing).
- Penggunaan framework Bootstrap.

---

**Dibangun sambil belajar PHP di Sekolah Menengah Atas** 🎓📚  
Proyek dasar untuk memahami dasar-dasar pengembangan web.
