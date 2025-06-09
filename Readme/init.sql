--Membuat database canteenUB
CREATE canteenUB;

--Menggunakan canteenUB untuk melakukan syntaxt berikutnya
USE canteenUB;

--Tabel menyimpan user berisi email, name dan password
CREATE TABLE user(
  id_user int AUTO_INCREMENT PRIMARY KEY,
  email varchar(55) NOT NULL,
  name varchar(55) NOT NULL,
  password varchar(255) NOT NULL
);

--Tabel menyimpan informasi canteen berisi name, price, description
CREATE TABLE canteen(
  id_canteen int AUTO_INCREMENT PRIMARY KEY,
  name varchar(55) NOT NULL,
  price varchar(55) NOT NULL,
  description text NOT NULL
);

--Tabel menyimpan informasi apa saja yang di like oleh user
CREATE TABLE like(
  id_like int AUTO_INCREMENT PRIMARY KEY,
  id_user int NOT NULL FOREIGN KEY,
  id_canteen int NOT NULL FOREIGN KEY,
  FOREIGN KEY (id_user) REFERENCES user(id_user),
  FOREIGN KEY (id_canteen) REFERENCES canteen(id_canteen)
);

--Tabel comment menyimpan komentar apa saja yang dimasukkan user kedalam sebuah kantin
CREATE TABLE comment(
  id_comment int AUTO_INCREMENT PRIMARY KEY,
  comment text NOT NULL,
  id_user int NOT NULL FOREIGN KEY,
  id_canteen int NOT NULL FOREIGN KEY,
  FOREIGN KEY (id_user) REFERENCES user(id_user),
  FOREIGN KEY (id_canteen) REFERENCES canteen(id_canteen)
)

--Data dummy

--Data user
... (Azkamitsa)
  
--Data canteen
... (Haniyyah)
