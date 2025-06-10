# controllerFunctionList
Dokumentasi fungsi-fungsi yang terdapat di dalam folder /controller/.

---

## Controller.class.php
**Ghefira**

- `__construct()`  
  Konstruktor dasar untuk menginisialisasi controller yang diperlukan dan me-load model terkait.

---

## Canteens.class.php
**Ghefira**

- `listCanteens()`  
  Menampilkan daftar semua kantin dengan memanggil data dari `CanteensModel` dan me-render `view/canteenList.php`.

- `viewDetail()`  
  Menampilkan detail dari sebuah kantin tertentu berdasarkan ID, termasuk komentar dan info lainnya, ke `view/canteenDetail.php`.

---

## Comments.class.php
**Azkamitsa**

- `addComment()`  
  Menambahkan komentar baru dari user pada kantin tertentu.

- `deleteComment()`  
  Menghapus komentar berdasarkan ID.

- `showUserComments()`  
  Menampilkan semua komentar yang ditulis oleh user di `view/commentList.php`.

---

## Favorites.class.php
**Haniyyah**

- `addFavorite()`  
  Menambahkan kantin ke daftar favorit user.

- `removeFavorite($canteenId, $userId)`  
  Menghapus kantin dari daftar favorit user.

- `listFavorites($userId)`  
  Menampilkan daftar kantin favorit user di `view/favoriteList.php`.

---

## Users.class.php
**Haniyyah**

- `register()`  
  Memproses pendaftaran akun baru.

- `login()`  
  Memverifikasi data login dan membuat sesi.

- `logout()`  
  Menghapus sesi dan logout user.

- `dashboard()`  
  Menampilkan halaman dashboard utama setelah login.


