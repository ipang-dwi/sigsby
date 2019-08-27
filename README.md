# web-based-sig-wisata-kota-surabaya

<img src="https://img.shields.io/github/license/ipang-dwi/xdesktop.svg" /> <img src="https://img.shields.io/badge/lab-firstplato.com-red.svg" /> <img src="https://img.shields.io/badge/need-donation-brightgreen.svg" />


> Update 18.03.2019, repo ini akan saya maintenance dan update berkala lagi. Saat ini masih dalam proses maintenance ulang, dan belu release.
</br>======================================================================</br>
Maaf repo ini sudah tidak bisa berjalan dikarenakan ada update GMap API setelah masuk platform GCP - Google Cloud Platform awal tahun 2018. Dan repo ini tidak akan saya update. Silahkan akses https://lab.firstplato.com/gisjogja untuk mencoba project serupa dengan GMap API terbaru, dan beberapa fitur tambahan, silahkan akses repo https://github.com/ipang-dwi/gisjogja-1. Bisa juga lihat video previewnya di https://www.youtube.com/watch?v=4a1MOR6FRpk

Sistem Informasi Geografis (SIG) / GIS Wisata Kota Surabaya Berbasis Web

Aplikasi Sistem Informasi Geografis (SIG) / GIS Wisata Kota Surabaya Berbasis Web. Untuk frontend menggunakan Native PHP5 dan untuk backend menggunakan framework CodeIgniter.

Semoga bisa bermanfaat, bagi yang ingin mempelajari :
- Web programming, terutama native PHP5, PHP Framework (CodeIgniter), Jquery dan CSS3
- Cara kerja REST API, dalam hal ini GMap (Google Map) API v3
- SIG - Sistem Informasi Geografis / GIS - Geographical Informasion System

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
