<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini MVC - <?= htmlspecialchars($title ?? 'Home', ENT_QUOTES, 'UTF-8'); ?></title>

    <!-- Bootstrap dipanggil sekali di layout agar semua halaman memakai style yang sama. -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #f8f9fa 0%, #eef4ff 100%);
            min-height: 100vh;
        }

        .hero-card {
            border: 0;
            border-radius: 1rem;
            box-shadow: 0 0.5rem 1.5rem rgba(13, 110, 253, 0.08);
        }
    </style>
</head>
<body>
    <!-- Navbar tampil di semua halaman karena diletakkan di layout utama. -->
    <?php include BASE_PATH . '/app/Views/partials/navbar.php'; ?>

    <main class="py-4">
        <!-- Isi halaman aktif dimasukkan di sini melalui variabel $viewFile. -->
        <?php require $viewFile; ?>
    </main>

    <!-- Footer juga dipakai bersama agar struktur halaman tetap konsisten. -->
    <?php include BASE_PATH . '/app/Views/partials/footer.php'; ?>
</body>
</html>