# web-based-sig-wisata-kota-surabaya

Sistem Informasi Geografis (SIG) / GIS Wisata Kota Surabaya Berbasis Web

Aplikasi Sistem Informasi Geografis (SIG) / GIS Wisata Kota Surabaya Berbasis Web. Untuk frontend menggunakan Native PHP5 dan untuk backend menggunakan framework CodeIgniter.

Semoga bisa bermanfaat, bagi yang ingin mempelajari :
- Web programming, terutama native PHP5, PHP Framework (CodeIgniter), Jquery dan CSS3
- Cara kerja REST API, dalam hal ini GMap (Google Map) API v3

Instalasi :
- Cukup download atau clone file-file di repo ini, dan copy kan pada web direktori kamu.
- Buat database baru, dan import file Sql ke database yang kamu buat. 
  Silahkan WA ke o856 48587 856, untuk file Sql nya. Nanti akan diemail. 
- Buka file 'configdb.php' pada baris ke 6, sesuaikan dengan setting database kamu.
  contoh $mysqli = new mysqli('localhost','user-kamu','password-kamu','nama-database-kamu');
- Buka file 'database.php' pada folder admin/application/config. Sesuaikan dengan setting database kamu.
  contoh 
  $db['default']['hostname'] = 'localhost';
  $db['default']['username'] = 'user-kamu';
  $db['default']['password'] = 'password-kamu';
  $db['default']['database'] = 'nama-database-kamu';
  $db['default']['dbdriver'] = 'mysqli';
- Buka file 'config.php' pada folder admin/application/config. Sesuaikan dengan setting nama folder admin project kamu.
  contoh $config['base_url']	= 'http://localhost/project-kamu/admin';
- Tes jalankan pada browser.

Preview :
https://imgur.com/a/4X1HS

Minimum requirements :
- PHP 5.x
- MySql 5.x atau MariaDB 5.x

Elements :
- Bootstrap v3.x
- Bootswatch v3.x Cosmo Themes
- CodeIgniter v3.x
- Jquery v1.x
- Datatables v1.x

Feel free to reach me on : 
www.firstplato.com
