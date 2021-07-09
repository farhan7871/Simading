<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\KelolaMadingRequest;
use App\KelolaMading;
use App\KelolaKategori;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;


class KelolaMadingSenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  fungsi memunculkan data dari halaman utama kelola mading 
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  fungsi membuat data di mading
    public function create()
    {
        $categories = KelolaKategori::all();

        return view('pages.sender.form', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //  fungsi yang mengarahkan data untuk melakukan penyimpanan foto 
    public function store(Request $request)
    {
        try {
            $mading = new KelolaMading;
            $mading->users_id = Auth::user()->id;
            $mading->kelola_kategori_id = $request->kategori_id;
            $mading->deskripsi = $request->deskripsi;
            $mading->status = 1;

            if($request->hasFile('gambar')){
                // store new image
                $mading->gambar = $request->file('gambar')->store('mading');
            }

            $mading->save();
        } catch (\Exception $e) {
            Alert::alert('Terjadi Kesalahan', $e->getMessage(), 'error');
        }

        Alert::alert('Berhasil Unggah Mading', 'Tunggu untuk verifikasi mading', 'success');
        return redirect()->route('home');
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
        $kelola_kategori = KelolaKategori::all();
        $users = User::all();

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

        $data['gambar'] = $request->file('gambar')->store(
            'assets/gallery',
            'public'

        );

        $item = KelolaMading::findOrFail($id);

        $item->update($data);
        

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
