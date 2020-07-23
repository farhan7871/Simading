<?php

namespace App\Http\Controllers;

use App\KelolaMading;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = KelolaMading::with(['kelola_kategori'])->get();
        return view('welcome', [
            'items' => $items
        ]);
    }
}
