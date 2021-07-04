<?php

namespace App\Http\Controllers;

use App\Models\Bengkel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controllers;


class BengkelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bengkel = Bengkel::all();
        return view('bengkel', ['Bengkel'=> $bengkel]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bengkel_tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Bengkel::create([
            'id' => $request->id,
            'judul' => $request->input('judul'),
            'jenis' => $request->jenis,
        ]);

        return redirect('bengkel');
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
        $bengkel = bengkel::find($id);
        return view('bengkel_edit', ['Bengkel' => $bengkel]);
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
        $bengkel = bengkel::find($id);
        $bengkel->id = $request->id;
        $bengkel->judul = $request->judul;
        $bengkel->jenis = $request->jenis;
        $bengkel->save();

        return redirect('bengkel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bengkel = Bengkel::find($id);
        $bengkel->delete();

        return redirect ('bengkel');
    }
}