# modelFunctionList
Dokumentasi fungsi-fungsi yang terdapat di dalam folder /model/.

---

## Model.class.php
**Ghefira Addien M. M.**

- `__construct()`  
  Menghubungkan ke database `canteen` untuk keperluan query data.

---

## UsersModel.class.php
**Azka Mitsalia Zamzami**

- `register($email, $name, $password)`  
  Menambahkan data user baru ke database saat proses pendaftaran.

- `login($login, $password)`  
  Mengecek data user untuk proses login.

---

## CanteensModel.class.php
**Zahra Nurul Haniyyah Anas**

- `getAllCanteen()`  
  Mengambil semua data kantin untuk ditampilkan di `view/canteenList.php`.

- `getCanteenById($id)`  
  Mengambil data detail sebuah kantin berdasarkan ID untuk ditampilkan di `view/canteenDetail.php`.

---

## CommentsModel.class.php
**Ghefira Addien M. M.**

- `getCommentsByUserId($userId)`  
  Mengambil semua komentar yang dibuat oleh user tertentu, ditampilkan di `view/commentList.php`.

- `getCommentsByCanteenId($canteenId)`  
  Mengambil semua komentar pada sebuah kantin tertentu, ditampilkan di `view/canteenDetail.php`.

- `addComment($userId, $canteenId, $content)`  
  Menambahkan komentar baru ke dalam database.

- `deleteComment($commentId)`  
  Menghapus komentar dari database berdasarkan ID komentar.
  
- `getCanteenById($id)`  
  Untuk mengambil data satu kantin tertentu dari database berdasarkan ID-nya.

---

## FavoritesModel.class.php
**Zahra Nurul Haniyyah Anas**

- `getFavoritesByUserId($userId)`  
  Mengambil daftar kantin yang difavoritkan oleh user, ditampilkan di `view/favoriteList.php`.

- `addFavorite($userId, $canteenId)`  
  Menambahkan kantin ke daftar favorit user.

- `deleteFavorite($userId, $canteenId)`  
  Menghapus kantin dari daftar favorit user.
