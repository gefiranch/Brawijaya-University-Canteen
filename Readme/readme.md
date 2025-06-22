# Brawijaya University Canteens

Sebuah sistem berbasis website (diutamakan untuk tampilan mobile) yang menampilkan informasi kantin di Universitas Brawijaya. Sistem ini dibangun menggunakan pendekatan arsitektur **MVC (Model-View-Controller)**.

---

## 📁 Struktur Folder

/Brawijaya-University-Canteens/
│
├── /controller/ # File controller untuk mengatur alur aplikasi
│ ├── Canteens.class.php
│ ├── Comments.class.php
│ ├── Controller.class.php
│ ├── Favorites.class.php
│ └── Users.class.php
│
├── /model/ # File model untuk menangani data dan database
│ ├── CanteensModel.class.php
│ ├── CommentsModel.class.php
│ ├── FavoritesModel.class.php
│ ├── Model.class.php
│ └── UsersModel.class.php
│
├── /view/ # Tampilan user (HTML/PHP)
│ ├── canteenDetail.php
│ ├── canteenList.php
│ ├── commentAdd.php
│ ├── commentList.php
│ ├── dashboard.php
│ ├── favoriteList.php
│ ├── login.php
│ └── register.php
│
├── /Other/ # File pendukung & dokumentasi internal
│ ├── database.sql # Struktur database
│ ├── readme.md # Dokumentasi proyek ini
│ ├── controllerFunctionList # Daftar fungsi di controller
│ └── modelFunctionList # Daftar fungsi di model
│
└── index.php # Entry point aplikasi


---

## Studi Kasus

- **Mencari dan melihat informasi detail mengenai kantin**  
  *Azka Mitsalia Zamzami*

- **Menambahkan favorit kantin**  
  *Zahra Nurul Haniyyah*

- **Menambahkan komentar pada kantin**  
  *Ghefira Addien M.M - 245150400111033*

---

## Cara Menjalankan

1. Import file `database.sql` ke phpMyAdmin atau aplikasi manajemen database lainnya.
2. Letakkan seluruh file dan folder ke dalam direktori `htdocs` (jika menggunakan XAMPP).
3. Akses melalui browser menggunakan URL:  
   `http://localhost/Brawijaya-University-Canteens/`

---

## Catatan

- Semua logic utama berada di dalam folder `/controller/`.
- Semua interaksi dengan database berada di `/model/`.
- File tampilan yang dilihat user berada di `/view/`.
- Dokumentasi fungsi dapat dilihat di:
  - `controllerFunctionList`
  - `modelFunctionList`

---

> Proyek ini telah mengalami banyak perubahan sejak proposal awal. Hal ini disesuaikan dengan proses belajar anggota kelompok serta kebutuhan teknis agar proyek dapat dikerjakan dengan baik oleh kelompok.
