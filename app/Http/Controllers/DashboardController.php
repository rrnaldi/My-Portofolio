<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.index'); // Mengarahkan ke views/admin/index.blade.php
    }
}
