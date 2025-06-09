CREATE DATABASE canteenUB;
USE canteenUB;

-- Tabel users
CREATE TABLE users (
  id_user INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(55) NOT NULL,
  name VARCHAR(55) NOT NULL,
  password VARCHAR(255) NOT NULL
);

-- Tabel canteen
CREATE TABLE canteen (
  id_canteen INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(55) NOT NULL,
  price VARCHAR(55) NOT NULL,
  description TEXT NOT NULL
);

-- Tabel favorites
CREATE TABLE favorites (
  id_like INT AUTO_INCREMENT PRIMARY KEY,
  id_user INT NOT NULL,
  id_canteen INT NOT NULL,
  FOREIGN KEY (id_user) REFERENCES users(id_user) ON DELETE CASCADE,
  FOREIGN KEY (id_canteen) REFERENCES canteen(id_canteen) ON DELETE CASCADE
);

-- Tabel comments
CREATE TABLE comments (
  id_comment INT AUTO_INCREMENT PRIMARY KEY,
  comment TEXT NOT NULL,
  id_user INT NOT NULL,
  id_canteen INT NOT NULL,
  FOREIGN KEY (id_user) REFERENCES users(id_user) ON DELETE CASCADE,
  FOREIGN KEY (id_canteen) REFERENCES canteen(id_canteen) ON DELETE CASCADE
);

-- Data dummy users (tanpa hash)
INSERT INTO users (email, name, password) VALUES
('gefi01@student.ub.ac.id', 'Gefi', 'password123'),
('alya02@student.ub.ac.id', 'Alya', 'securepass456'),
('budi03@student.ub.ac.id', 'Budi', 'mypassword789'),
('citra04@student.ub.ac.id', 'Citra', 'passw0rd'),
('dimas05@student.ub.ac.id', 'Dimas', 'dimaspass321');

-- Data dummy canteen
INSERT INTO canteen (name, price, description) VALUES
('Kantin FILKOM', '7.000 - 15.000', 'Terletak di Fakultas Ilmu Komputer, UB. Kantin ini menyediakan makanan cepat saji seperti ayam geprek, nasi goreng, dan berbagai minuman kopi kekinian. Harga ramah kantong untuk mahasiswa IT.'),
('Kantin FEB', '8.000 - 20.000', 'Berlokasi di Fakultas Ekonomi dan Bisnis, UB. Menawarkan menu bervariasi seperti soto, bakso, ayam penyet, serta kopi susu dan es teh manis. Tempat duduk nyaman untuk diskusi tugas.'),
('Kantin FIB', '5.000 - 12.000', 'Berada di Fakultas Ilmu Budaya, UB. Menyajikan makanan tradisional seperti nasi jagung, pecel, serta jajanan pasar seperti onde-onde dan klepon. Suasana etnik yang cocok untuk santai.'),
('Kantin FTP', '6.000 - 18.000', 'Lokasinya di Fakultas Teknologi Pertanian, UB. Fokus pada makanan sehat dan bergizi seperti nasi merah, salad, sup ayam herbal, dan jus buah segar. Cocok untuk mahasiswa yang peduli gizi.'),
('Kantin FMIPA', '5.000 - 13.000', 'Terletak di area Fakultas MIPA, UB. Menyediakan nasi campur, ayam goreng, tahu tempe, serta minuman seperti es jeruk dan teh manis. Banyak pilihan menu setiap harinya.'),
('Kantin FH', '7.000 - 17.000', 'Berlokasi di Fakultas Hukum, UB. Menjual makanan berat seperti nasi rames, mie goreng, serta camilan seperti pastel dan pisang goreng. Cocok untuk mahasiswa yang butuh tenaga ekstra.'),
('Kantin FISIP', '6.000 - 16.000', 'Terletak di Fakultas Ilmu Sosial dan Ilmu Politik, UB. Menu kekinian seperti rice bowl, spaghetti, chicken katsu, dan minuman boba tersedia. Desain kantin cozy dan instagramable.'),
('Kantin FK', '10.000 - 25.000', 'Berada di Fakultas Kedokteran, UB. Menawarkan makanan sehat seperti nasi tim ayam, sup bening, smoothies, dan salad buah. Kebersihan dan kualitas makanan sangat terjaga.'),
('Kantin FP', '5.000 - 14.000', 'Berlokasi di Fakultas Pertanian, UB. Menjual nasi sayur, lauk kampung seperti ikan goreng, sambal terasi, dan lalapan segar. Banyak pilihan sayur hasil kebun kampus.'),
('Kantin FT', '6.000 - 18.000', 'Terletak di Fakultas Teknik, UB. Kantin ini luas dan memiliki banyak tenant makanan seperti burger, bakso bakar, nasi kuning, serta es campur. Ramai saat jam istirahat.');
