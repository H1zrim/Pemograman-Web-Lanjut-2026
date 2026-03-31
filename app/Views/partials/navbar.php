<?php
// Siapkan URL untuk setiap menu navbar.
$homeUrl = BASE_URL === '/' ? '/' : BASE_URL . '/';
$aboutUrl = rtrim(BASE_URL, '/') . '/home/about';
$changeLogUrl = rtrim(BASE_URL, '/') . '/change-log';
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
  <div class="container">
    <!-- Nama website yang mengarah ke halaman utama. -->
    <a class="navbar-brand fw-semibold" href="<?= htmlspecialchars($homeUrl, ENT_QUOTES, 'UTF-8'); ?>">Mini MVC</a>

    <!-- Tombol ini muncul saat layar kecil agar menu bisa dibuka-tutup. -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mainNavbar">
      <div class="navbar-nav ms-auto">
        <!-- Kumpulan menu navigasi utama website. -->
        <a class="nav-link" href="<?= htmlspecialchars($homeUrl, ENT_QUOTES, 'UTF-8'); ?>">Home</a>
        <a class="nav-link" href="<?= htmlspecialchars($aboutUrl, ENT_QUOTES, 'UTF-8'); ?>">About</a>
        <a class="nav-link" href="<?= htmlspecialchars($changeLogUrl, ENT_QUOTES, 'UTF-8'); ?>">Log Perubahan</a>
      </div>
    </div>
  </div>
</nav>