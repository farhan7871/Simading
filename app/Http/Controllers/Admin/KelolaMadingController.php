<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\KelolaMadingRequest;
use App\KelolaMading;
use App\KelolaKategori;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class KelolaMadingController extends Controller
{
    //  fungsi memunculkan data dari halaman utama kelola mading 
    public function index(Request $request)
    {
        if ($request->has('cari')){
            $items = KelolaMading::where('deskripsi', 'LIKE', '%'.$request->cari.'%')->get();
        }else{
            $items = KelolaMading::with(['kelola_kategori' , 'users'])->get();

            // urutkan mading yang terbaru diatas
            $items = $items->sortBy('updated_at');
        }

        // sweet alert success
        if(session('success_message')){
            Alert::success('Berhasil!', session('success_message'));
            
        }

        return view('pages.admin.kelola-mading.index', [
            'items' => $items
        ]);
    }

    //  fungsi membuat data di kelola mading
    public function create()
    {
        $kelola_kategori = KelolaKategori::all();
        $users = User::all();
        return view('pages.admin.kelola-mading.create', [
            'kelola_kategori' => $kelola_kategori,
            'users' => $users
        ]);
    }
    //  fungsi yang mengarahkan data untuk melakukan penyimpanan foto 
    public function store(KelolaMadingRequest $request)
    {
        
        $data = $request->all();
        $data['gambar'] = $request->file('gambar')->store('mading');

        KelolaMading::create($data);
        return redirect()->route('kelola-mading.index');
    }

    // tampilkan detail mading
    public function show($id)
    {
        // todo code detail mading disini
    }

    //  fungsi yang mengarahkan ke halaman edit
    public function edit($id)
    {
        $item = KelolaMading::findOrFail($id);
        // dd($item->gambar);
        $kelola_kategori = KelolaKategori::all();
        $users = User::all();

        return view('pages.admin.kelola-mading.edit', [
            'item' => $item,
            'kelola_kategori' => $kelola_kategori,
            'users' => $users
        ]);
    }

    // mengubah status verifikasi mading
    public function verifyMading($id){
        $item = KelolaMading::findOrFail($id);
        // dd('haha');

        $item->status = 2; // verified
        $item->save();
        
        return response()->json(['success'=> true]);
    }

    //  fungsi untuk menyimpan data terbaru
    public function update(KelolaMadingRequest $request, $id)
    {
        $data = $request->all();
        $item = KelolaMading::findOrFail($id);
     
        // check form image value, if null skip update
        if($request->hasFile('gambar')){
            // replace old image when update
            if($item->gambar != null){
                $image_path = public_path().'/storage/'.$item->gambar;
                unlink($image_path);
            }
            
            // store new image
            $item->gambar = $request->file('gambar')->store('mading');
        }
        
        $item->kelola_kategori_id = $request->kelola_kategori_id;
        $item->deskripsi = $request->deskripsi;
        $item->save();

        return redirect()->route('kelola-mading.index');
    }

    // Fungsi untuk menghapus data
    public function destroy($id)
    {
        $item = KelolaMading::findOrFail($id);
        $item->delete();

        return response()->json(['success'=> true]);
    }
}
