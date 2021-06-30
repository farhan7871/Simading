<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\KelolaKategoriRequest;
use App\KelolaKategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KelolaKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  fungsi memunculkan data dari halaman utama kelola kategori
    public function index(Request $request)
    {
        if ($request->has('cari')){
            $items = KelolaKategori::where('kategori', 'LIKE', '%'.$request->cari.'%')->get();
        }else{

        $items = KelolaKategori::all();

        }

        return view('pages.admin.kelola-kategori.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  fungsi membuat data di kelola kategori
    public function create()
    {
        return view('pages.admin.kelola-kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //  fungsi yang mengarahkan untuk melakukan penyimpanan data
    public function store(KelolaKategoriRequest $request)
    {
        $data = $request->all();

        KelolaKategori::create($data);

        return redirect()->route('kelola-kategori.index');
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
        $item = KelolaKategori::findOrFail($id);

        return view('pages.admin.kelola-kategori.edit', [
            'item' => $item
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
    public function update(KelolaKategoriRequest $request, $id)
    {
        $data = $request->all();

        $item = KelolaKategori::findOrFail($id);

        $item->update($data);

        return redirect()->route('kelola-kategori.index');
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
        $item = KelolaKategori::findOrFail($id);
        $item->delete();

        return redirect()->route('kelola-kategori.index');
    }
}
