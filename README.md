Nama: Syafira Zahwa
NIM : 60324032


Aplikasi ini adalah sistem manajemen kategori buku berbasis web menggunakan PHP dan MySQL.
Fitur utama:

* Menampilkan data kategori
* Menambah kategori
* Mengedit kategori
* Menghapus kategori

Cara instalasi dan menjalankan:

1. Download / Clone Project
2. Letakkan project di: C:\laragon\www\
3. Jalankan Laragon
4. Buat Database
    -Klik menu Database di Laragon (atau buka phpMyAdmin)
    -Buat database baru dengan nama: uts_60324031
5. Import Database
    -Pilih database yang sudah dibuat
    -Klik tab Import
    -Upload file: database_backup.sql
6. Konfigurasi
    -Buka file: config/database.php
    -Pastikan isinya sesuai:
        $conn = new mysqli("localhost", "root", "", "uts_perpustakaan_60324031");
7. Jalankan Aplikasi
    -Buka browser dan akses: http://localhost/uts_60324031


struktur folder
UTS_60324031/
│
├── config/
│   └── database.php
├── index.php
├── create.php
├── edit.php
├── delete.php
├── database_backup.sql
└── README.md

link repository

https://github.com/username/nama-repo
