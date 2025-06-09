# modelFunctionList
Dokumentasi fungsi-fungsi yang terdapat di dalam folder /model/.

---

## Model.class.php
**Ghefira**

- `__construct()`  
  Menghubungkan ke database `canteen` untuk keperluan query data.

---

## CanteensModel.class.php
**Ghefira**

- `getAllCanteen()`  
  Mengambil semua data kantin untuk ditampilkan di `view/canteenList.php`.

- `getCanteenById()`  
  Mengambil data detail sebuah kantin berdasarkan ID untuk ditampilkan di `view/canteenDetail.php`.

---

## CommentsModel.class.php
**Azkamitsa**

- `getCommentsByUserId()`  
  Mengambil semua komentar yang dibuat oleh user tertentu, ditampilkan di `view/commentList.php`.

- `getCommentsByCanteenId()`  
  Mengambil semua komentar pada sebuah kantin tertentu, ditampilkan di `view/canteenDetail.php`.

- `addComment()`  
  Menambahkan komentar baru ke dalam database.

- `deleteComment()`  
  Menghapus komentar dari database berdasarkan ID komentar.

---

## FavoritesModel.class.php
**Haniyyah**

- `getFavoritesByUserId()`  
  Mengambil daftar kantin yang difavoritkan oleh user, ditampilkan di `view/favoriteList.php`.

- `addFavorite()`  
  Menambahkan kantin ke daftar favorit user.

- `deleteFavorite()`  
  Menghapus kantin dari daftar favorit user.

---

## UsersModel.class.php
**Haniyyah**

- `register()`  
  Menambahkan data user baru ke database saat proses pendaftaran.

- `login()`  
  Mengecek data user untuk proses login.
