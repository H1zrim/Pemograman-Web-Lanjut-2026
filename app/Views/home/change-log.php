<!-- Halaman ini dipakai sebagai catatan perkembangan project agar perubahan mudah dilacak. -->
<div class="container my-3">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body p-4">
                    <h1 class="mb-3">Log Perubahan Project</h1>
                    <p class="lead mb-2">Halaman ini merangkum analisis perubahan yang dilakukan setelah project mengalami tampilan source code mentah dan error <strong>404 - Halaman tidak ditemukan</strong>.</p>
                    <p class="text-muted mb-0">Tanggal analisis: 31 Maret 2026</p>
                </div>
            </div>

            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body p-4">
                    <h2 class="h4 mb-3">Ringkasan masalah utama</h2>
                    <ul class="mb-0">
                        <li>Beberapa file penting masih tersimpan dalam encoding <code>UTF-16</code> sehingga PHP tidak mengeksekusi file dan malah menampilkan isi source.</li>
                        <li>Router belum memperhitungkan akses dari subfolder XAMPP seperti <code>/Pemograman Web Lanjut/</code>, sehingga route <code>/</code> tidak cocok dan menghasilkan 404.</li>
                        <li>Halaman <code>About</code> belum lengkap karena route dan method controller belum sepenuhnya disediakan.</li>
                        <li>Integrasi Bootstrap kemudian dipusatkan ke layout utama agar CSS dan komponen tidak ditulis berulang di setiap view.</li>
                    </ul>
                </div>
            </div>

            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body p-4">
                    <h2 class="h4 mb-3">Log perkembangan terbaru</h2>
                    <ul class="mb-0">
                        <li>Perbaikan route untuk akses dari subfolder XAMPP berhasil diterapkan.</li>
                        <li>Halaman <code>Home</code>, <code>About</code>, dan <code>Log Perubahan</code> sudah aktif.</li>
                        <li>Bootstrap telah diintegrasikan melalui <code>app/Views/layouts/main.php</code>.</li>
                        <li>Navbar dibuat responsif dan footer sudah menggunakan versi Bootstrap yang sama.</li>
                    </ul>
                </div>
            </div>

            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body p-4">
                    <h2 class="h4 mb-3">Perbandingan sebelum vs sesudah</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered align-middle table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th>Bagian</th>
                                    <th>Sebelumnya</th>
                                    <th>Sekarang</th>
                                    <th>Dampak</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>Bootstrap</code></td>
                                    <td>CDN ditulis berulang di setiap halaman view.</td>
                                    <td>Bootstrap dimuat sekali di <code>app/Views/layouts/main.php</code>.</td>
                                    <td>Lebih rapi, konsisten, dan mudah dirawat.</td>
                                </tr>
                                <tr>
                                    <td><code>public/index.php</code></td>
                                    <td>File terbaca sebagai <code>UTF-16</code>, source PHP bisa tampil mentah di browser.</td>
                                    <td>Disimpan ulang ke <code>UTF-8</code> dan tetap menjalankan <code>Router::run()</code>.</td>
                                    <td>Aplikasi dieksekusi normal oleh PHP.</td>
                                </tr>
                                <tr>
                                    <td><code>app/Core/Router.php</code></td>
                                    <td>Belum aman untuk subfolder XAMPP.</td>
                                    <td>Menyesuaikan <code>BASE_URL</code>, <code>/public</code>, dan hasil <code>urldecode()</code>.</td>
                                    <td>URL localhost/subfolder sekarang cocok ke route yang benar.</td>
                                </tr>
                                <tr>
                                    <td><code>app/Views/partials/navbar.php</code></td>
                                    <td>Navbar sederhana dan belum responsif penuh.</td>
                                    <td>Navbar Bootstrap dibuat responsif dengan tombol toggler.</td>
                                    <td>Tampilan lebih modern di desktop dan mobile.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
