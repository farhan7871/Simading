<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
// use App\Http\Request\Admin\KelolaMadingRequest;
use App\KelolaMading;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KelolaMadingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = KelolaMading::all();

        return view('pages.admin.kelola-mading.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *e
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.admin.kelola-berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();

        KelolaMading::create($data);

        return redirect()->route('kelola-berita.index');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
