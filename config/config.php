<?php

// BASE_PATH menunjuk ke folder utama project agar file lain mudah dipanggil.
define('BASE_PATH', dirname(__DIR__));

// SCRIPT_NAME dibaca untuk mengetahui project sedang berjalan dari folder mana.
$scriptName = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '');

// BASE_URL dipakai untuk membuat link yang tetap benar saat project dibuka dari localhost/subfolder.
$baseUrl = preg_replace('#/(public/)?index\.php$#', '', $scriptName);
$baseUrl = rtrim($baseUrl, '/');

define('BASE_URL', $baseUrl === '' ? '/' : $baseUrl);