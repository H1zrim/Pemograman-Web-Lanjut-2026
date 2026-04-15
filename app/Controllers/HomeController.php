<?php

require_once BASE_PATH . '/app/Core/Controller.php';
require_once BASE_PATH . '/app/Models/M_prodi.php';
class HomeController extends Controller
{
    public function index()
    {
        $model = new M_prodi();
         $data = [
            'title' => 'Home',
            'message' => 'Selamat datang di Mini MVC',
            'produ' => $model->getAll() 
        ];

        $this->view('home/index', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About',
            'description' => 'Ini adalah halaman tentang Mini MVC yang kita bangun.'
        ];

        $this->view('home/index', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact',
            'email' => 'admin@minimvc.local'
        ];

        $this->view('home/index', $data);
    }

    public function learning()
    {
        $data = [
            'title' => 'Pembelajaran MVC & Routing'
        ];

        $this->view('learning/index', $data);
    }
}