<?php

// Menampilkan error saat proses pengembangan agar bug lebih mudah ditemukan.
error_reporting(E_ALL);
ini_set('display_errors', '1');

// 1. Muat konfigurasi project seperti BASE_PATH dan BASE_URL.
require_once __DIR__ . '/../config/config.php';

// 2. Muat class Router yang bertugas membaca URL.
require_once BASE_PATH . '/app/Core/Router.php';

// 3. Muat daftar route website dari file web.php.
require_once BASE_PATH . '/app/Routes/web.php';

// 4. Jalankan router untuk menghubungkan URL ke controller yang sesuai.
Router::run();
