<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('page.dashboard');
    }
    public function petugas()
    {
        return view('page.data-petugas');
    }
}
