<?php

require_once BASE_PATH . '/app/Core/Controller.php';

class HomeController extends Controller
{
    // Halaman utama website.
    public function index(): void
    {
        $this->view('home/index', ['title' => 'Home']);
    }

    // Halaman informasi singkat tentang project.
    public function about(): void
    {
        $this->view('home/about', ['title' => 'About']);
    }

    // Halaman catatan perubahan dan perkembangan project.
    public function changeLog(): void
    {
        $this->view('home/change-log', ['title' => 'Log Perubahan']);
    }
}
