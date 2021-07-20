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
    // fungsi index
    public function index()
    {

        $items = KelolaMading::where('status', 2)
                    ->with(['kelola_kategori'])
                    ->orderBy('created_at', 'DESC')
                    ->paginate(8);

        $categories = KelolaKategori::has('kelola_mading')->get();

        return view('welcome', [
            'items' => $items,
            'categories' => $categories,
        ]);
    }

    // fungsi simpan saran
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

    // fungsi get data mading menggunakan jquery
    public function getMadingJquery(Request $request, $category_id) {

        $html = '';

        try {
            
            if($request->ajax()) {
                // get request dengan header query
                $query = $request->get('query');
                // check apakah id bernilai 'all'
                if($category_id == 'all') {
                    if($query != '') {
                        $madings = KelolaMading::with('kelola_kategori')
                                    ->where('judul', 'LIKE', '%'.$query.'%')
                                    ->where('status', 2)
                                    ->orderBy('created_at', 'DESC')
                                    ->paginate(8);
                    } else {
                        $madings = KelolaMading::with('kelola_kategori')
                                    ->where('status', 2)
                                    ->orderBy('created_at', 'DESC')
                                    ->paginate(8);
                    }

                } else {
                    if($query != '') {
                        $madings = KelolaMading::with('kelola_kategori')
                                    ->where('judul', 'LIKE', '%'.$query.'%')
                                    ->where('kelola_kategori_id', $category_id)
                                    ->where('status', 2)
                                    ->orderBy('created_at', 'DESC')
                                    ->paginate(8);
                    } else {
                        $madings = KelolaMading::with('kelola_kategori')
                                    ->where('kelola_kategori_id', $category_id)
                                    ->where('status', 2)
                                    ->orderBy('created_at', 'DESC')
                                    ->paginate(8);
                    } 
                }

                // if($madings->count() > 0) {
                //     foreach($madings as $mading) {
                //         $html .= '
                //                 <div class="my-3 mx-3">
                //                 <div class="card shadow text-center bg-white" style="width: 250px; height: 370px; background-color: #11638a;">
                //                     <div class="card-header">
                //                         <h3>'.$mading->kelola_kategori->kategori.'</h2>
                //                     </div>
                //                     <a href="'.url('/mading/'.$mading->id).'">
                //                         <img class="card-img-top" style="width: 100%; height: 15vw; object-fit:cover;" src="/storage/'.$mading->gambar.'" alt="">
                //                     </a>
                //                     <div class="card-body">
                //                         <h6 class="card-title text-truncate">'.$mading->deskripsi.'</h6>
                //                         <p> Terbit: '.$mading->updated_at.'</p>
                //                     </div>
                //                 </div>
                //             </div>
                //         ';
                //     }
                // } else {
                //     $html = '<p class="text-center">Data tidak ditemukan 😭</p>';
                // }
            }

            return response()->json($madings);

        } catch(\Exception $e) {
            return response()->json($e);
        }

    }
}
