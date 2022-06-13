<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index() {
        $data = array('title' => 'Dashboard');
        $users = User::all();
        return view('dashboard.index', $data, compact(['users']));
    }

    public function about() {
        $data = array('title' => 'Tentang Kami');
        return view('dashboard.about', $data);
    }

    public function kontak() {
        $data = array('title' => 'Kontak Kami');
        return view('dashboard.kontak', $data);
    }

    public function kategori() {
        $data = array('title' => 'Kategori Produk');
        return view('homepage.kategori', $data);
    }
}
