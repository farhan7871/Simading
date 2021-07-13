<?php

namespace App\Http\Controllers;

use App\KelolaMading;
use App\Suggestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

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
            $items = KelolaMading::where('deskripsi', 'LIKE', '%'.$request->cari.'%')
                                    ->where('status', 2)->paginate(8);
        } else {
            $items = KelolaMading::where('status', 2)->with(['kelola_kategori'])->paginate(8);
        }

        return view('welcome', [
            'items' => $items
        ]);
    }

    public function storeSuggestion(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'email',
            'content' => 'min:10',
        ]);

        if ($validator->fails()) {
            Alert::alert('Kesalahan data', $validator->errors()->first(), 'error');
            return redirect()->route('home');
        }

        try {
            $suggestion = new Suggestion;
            $suggestion->email = $request->email;
            $suggestion->content = $request->content;
            $suggestion->save();
        } catch(\Exception $e) {
            Alert::alert('Terjadi Kesalahan', 'Terjadi kesalahan pada server', 'error');
            return redirect()->route('home');
        }

        Alert::alert('Berhasil memeberikan saran', 'Terima kasih telah memberikan saran kepada kami', 'success');
        return redirect()->route('home');

    }
}
