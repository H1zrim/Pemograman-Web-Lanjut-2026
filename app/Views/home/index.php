<!-- Halaman Home adalah halaman pertama yang dilihat pengguna saat membuka website. -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-9">
            <div class="card hero-card">
                <div class="card-body p-5 text-center">
                    <span class="badge bg-primary-subtle text-primary mb-3">Mini MVC</span>
                    <h1 class="display-5 fw-bold mb-3">Selamat Datang di Mini MVC!</h1>
                    <p class="lead text-muted mb-4">Framework sederhana dengan routing, controller, dan view untuk pengembangan website PHP.</p>

                    <!-- Tombol cepat untuk berpindah ke halaman lain. -->
                    <div class="d-flex justify-content-center gap-2 flex-wrap">
                        <a href="<?= htmlspecialchars(rtrim(BASE_URL, '/') . '/home/about', ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-primary">Lihat About</a>
                        <a href="<?= htmlspecialchars(rtrim(BASE_URL, '/') . '/change-log', ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-outline-primary">Lihat Log</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
