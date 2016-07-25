<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function index()
    {
        return view('backend.pages.dashboard');
    }

    public function get_blogEkle()
    {
        return view('backend.pages.blog_ekle');
    }
}
