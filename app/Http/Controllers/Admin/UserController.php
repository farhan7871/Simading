<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use App\User;
use App\KelolaMading;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        if($request->has('cari')){
            $items = User::where('name', 'LIKE', '%'.$request->cari.'%')->get();
        } else{
            $items = User::all();
        }

        // sweet alert success
        if(session('success_message')){
            Alert::success('Berhasil!', session('success_message'));
            
        }

        return view('pages.admin.kelola-user.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        // return view('pages.admin.kelola-kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //  fungsi yang mengarahkan untuk melakukan penyimpanan data
    public function store(UserRequest $request)
    {
        $data = $request->all();

        User::create($data);

        // return redirect()->route('kelola-kategori.index');
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
        $item = User::findOrFail($id);

        // return view('pages.admin.kelola-kategori.edit', [
        //     'item' => $item
        // ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //  fungsi untuk menyimpan data terbaru
    public function update(UserRequest $request, $id)
    {
        $data = $request->all();

        $item = User::findOrFail($id);

        $item->update($data);

        // return redirect()->route('kelola-kategori.index');
    }

    // delete user 
    public function destroy($id)
    {
        if (KelolaMading::where('users_id', '=', $id)->exists()) {
            // tampilkan pesan error
            return response()->json(['success'=> false]);
        }else{
            // safe delete
            $item = User::findOrFail($id);
            $item->delete();
            return response()->json(['success'=> true]);
        }
    }

    // mengubah level user
    public function verifyUser($id){
        $item = User::findOrFail($id);

        $item->level = "sender"; // verified
        $item->save();
        
        return response()->json(['success'=> true]);
    }
}
