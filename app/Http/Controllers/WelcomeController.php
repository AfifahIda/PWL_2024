<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello() {
        return 'Hello World';
    }
    public function index() {
        return 'Selamat Datang';
    }
    public function about() {
        return 'NIM : 2241760032 <br> Nama : Afifah Ida Setyo Rini';
    }
    public function articles($id) {
        return 'Halaman Artikel dengan ID '.$id;
    }
}