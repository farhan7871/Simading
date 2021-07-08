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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  fungsi memunculkan data dari halaman utama kelola mading 
    public function index(Request $request)
    {
        

        
        if ($request->has('cari')){
            $items = KelolaMading::where('kelola_kategori_kategori', 'LIKE', '%'.$request->cari.'%')->get();
        }else{

        $items = KelolaMading::with(['kelola_kategori' , 'users'])->get();
        }


        return view('pages.admin.kelola-mading.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //  fungsi yang mengarahkan data untuk melakukan penyimpanan foto 
    public function store(KelolaMadingRequest $request)
    {
        
        $data = $request->all();
        $data['gambar'] = $request->file('gambar')->store('mading');

        KelolaMading::create($data);
        return redirect()->route('kelola-mading.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    //  fungsi yang mengarahkan ke halaman edit
    public function edit($id)
    {
        $item = KelolaMading::findOrFail($id);
        // dd($item->gambar);
        $kelola_kategori = KelolaKategori::all();
        $users = User::all();

        Alert::success('Success Title', 'Success Message');

        return view('pages.admin.kelola-mading.edit', [
            'item' => $item,
            'kelola_kategori' => $kelola_kategori,
            'users' => $users
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //  fungsi untuk menyimpan data terbaru
    public function update(KelolaMadingRequest $request, $id)
    {
        
        $data = $request->all();
        $item = KelolaMading::findOrFail($id);

        // Unlink old image when update
        $image_path = public_path().'/storage/'.$item->gambar;
        unlink($image_path);

        // store new image
        $data['gambar'] = $request->file('gambar')->store('mading');



        $item->update($data);
        // $item->kelola_kategori_id = $request->kelola_kategori_id;
        // $item->deskripsi = $request->deskripsi;
        // $item->gambar = $request->gambar;
        // $item->save();


        Alert::success('Success Title', 'Success Message');
        return redirect()->route('kelola-mading.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // Fungsi untuk menghapus data
    public function destroy($id)
    {
        $item = KelolaMading::findOrFail($id);
        $item->delete();

        return redirect()->route('kelola-mading.index');
    }
}
