<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\KelolaKategoriRequest;
use App\KelolaKategori;
use App\KelolaMading;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KelolaKategoriController extends Controller
{
    //  fungsi memunculkan data dari halaman utama kelola kategori
    public function index(Request $request)
    {
        if ($request->has('cari')){
            $items = KelolaKategori::where('kategori', 'LIKE', '%'.$request->cari.'%')->get();
        }else{
            $items = KelolaKategori::all();
            // $items = $user->items()->select('items.*', 'count(items.id) AS items_count')
            // ->groupBy('items.id')
            // ->get()
            // ->toArray();
        }

        return view('pages.admin.kelola-kategori.index', [
            'items' => $items
        ]);
    }

    //  fungsi membuat data di kelola kategori
    public function create()
    {
        return view('pages.admin.kelola-kategori.create');
    }

    //  fungsi yang mengarahkan untuk melakukan penyimpanan data
    public function store(KelolaKategoriRequest $request)
    {
        $data = $request->all();

        KelolaKategori::create($data);

        return redirect()->route('kelola-kategori.index');
    }

    public function show($id)
    {
        //
    }

    //  fungsi yang mengarahkan ke halaman edit
    public function edit($id)
    {
        $item = KelolaKategori::findOrFail($id);

        return view('pages.admin.kelola-kategori.edit', [
            'item' => $item
        ]);
    }

    //  fungsi untuk menyimpan data terbaru
    public function update(KelolaKategoriRequest $request, $id)
    {
        $data = $request->all();

        $item = KelolaKategori::findOrFail($id);

        $item->update($data);

        return redirect()->route('kelola-kategori.index');
    }

    // Fungsi untuk menghapus data
    public function destroy($id)
    {
        // cek apakah kategori sudah dipakai di mading
        if (KelolaMading::where('kelola_kategori_id', '=', $id)->exists()) {
            // tampilkan pesan error
            return response()->json(['success'=> false]);
        }else{
            // save delete, karena kategori tidak dipakai
            $item = KelolaKategori::findOrFail($id);
            $item->delete();
            return response()->json(['success'=> true]);
        }
    }
}
