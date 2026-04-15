<?php

Router::get('/', 'HomeController@index');
Router::get('/about', 'HomeController@about');
Router::get('/contact', 'HomeController@contact');
Router::get('/learning', 'HomeController@learning');