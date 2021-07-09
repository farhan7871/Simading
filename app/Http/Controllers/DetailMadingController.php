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
       
        $mading = KelolaMading::find($id);
        
        return view('detailmading', [
            'mading' => $mading
        ]);
    }
}

