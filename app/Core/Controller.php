<?php

class Controller
{
    // Method ini dipakai semua controller untuk menampilkan halaman view.
    protected function view(string $view, array $data = []): void
    {
        // Data dari controller diubah menjadi variabel agar bisa langsung dipakai di view.
        extract($data);

        // Tentukan file view yang ingin dibuka, misalnya home/index.php.
        $viewFile = BASE_PATH . '/app/Views/' . $view . '.php';

        // Layout utama membungkus isi halaman agar navbar, footer, dan Bootstrap selalu konsisten.
        $layoutFile = BASE_PATH . '/app/Views/layouts/main.php';

        if (!file_exists($viewFile)) {
            http_response_code(404);
            echo "View tidak ditemukan: $view";
            return;
        }

        // Jika layout tersedia, isi halaman dimuat di dalam layout.
        if (file_exists($layoutFile)) {
            require $layoutFile;
            return;
        }

        // Jika tidak ada layout, tampilkan view secara langsung.
        require $viewFile;
    }
}
