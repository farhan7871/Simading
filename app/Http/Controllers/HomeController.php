<?php

namespace App\Http\Controllers;

use App\KelolaKategori;
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
                                    ->where('status', 2)->orderBy('created_at', 'DESC')->paginate(8);
        } else {
            $items = KelolaMading::where('status', 2)->with(['kelola_kategori'])->orderBy('created_at', 'DESC')->paginate(8);
        }

        $categories = KelolaKategori::all();

        return view('welcome', [
            'items' => $items,
            'categories' => $categories,
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

    public function filterMadings($id) {
        $madings = KelolaMading::with('kelola_kategori')
                                ->where('kelola_kategori_id', $id)
                                ->where('status', 2)
                                ->orderBy('created_at', 'DESC')
                                ->paginate(8);

        return response()->json($madings);
    }

    public function fetchAllMadings() { 
        $madings = KelolaMading::with('kelola_kategori')
                                ->where('status', 2)
                                ->orderBy('created_at', 'DESC')
                                ->paginate(8);

        return response()->json($madings);
    }

    public function liveSearchMadings(Request $request) {
        if($request->ajax()) {
            $query = $request->get('query');
            if($query != '') {
                $data = KelolaMading::with('kelola_kategori')
                                    ->where('deskripsi', 'LIKE', '%'.$query.'%')
                                    ->where('status', 2)->orderBy('created_at', 'DESC')->paginate(8);
            } else {
                $data = KelolaMading::with('kelola_kategori')
                    ->where('status', 2)
                    ->with(['kelola_kategori'])
                    ->orderBy('created_at', 'DESC')
                    ->paginate(8);
            }
        }

        return response()->json($data);
    }

    public function getMadingJquery(Request $request, $category_id) {

        try {
            
            if($request->ajax()) {

            }

        } catch(\Exception $e) {
            return response()->json($e);
        }

    }
}
