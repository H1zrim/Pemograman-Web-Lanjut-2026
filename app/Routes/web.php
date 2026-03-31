<?php

// File ini adalah peta URL website.
// Format penulisan route: Router::get('url', 'NamaController@method');

// Halaman utama website.
Router::get('/', 'HomeController@index');

// Halaman tentang project.
Router::get('/home/about', 'HomeController@about');

// Halaman log perubahan dan perkembangan project.
Router::get('/change-log', 'HomeController@changeLog');
