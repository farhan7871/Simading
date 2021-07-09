<?php

namespace App\Http\Controllers;

use App\KelolaMading;
use Illuminate\Http\Request;

class DetailMadingController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($id)
    {
       
        $items = KelolaMading::with(['kelola_kategori'])->get();
        

        return view('detailmading', [
            'items' => $items
        ]);
    }
}

