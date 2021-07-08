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
    public function index(Request $request)
    {
        if ($request->has('cari')){
            $items = KelolaMading::where('kelola_kategori_kategori', 'LIKE', '%'.$request->cari.'%')
                                    ->where('status', 2)->get();
        }else{
        $items = KelolaMading::where('status', 2)->with(['kelola_kategori'])->get();
        }

        return view('welcome', [
            'items' => $items
        ]);
    }
}
