<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PembeliBengkel;

class PembelianController extends Controller
{
    public function index()
    {
        //
        $pembelian = PembeliBengkel::all();
        return view ('pembeli', ['PembeliBengkel'=> $pembelian]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pembeli_tambah');
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
        PembeliBengkel::create([
            'id' => $request->id,
            'nama_barang' => $request->nama_barang,
            'tanggal' => $request->tanggal,
            'total' => $request->total,
        ]);
        return redirect('pembelian');
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
        $pembelian = PembeliBengkel::find($id);
        return view ('pembeli_edit', ['pembelian'=> $pembelian]);
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
        $pembelian = PembeliBengkel::find($id);
        $pembelian->id = $request->input("id");
        $pembelian->nama_barang = $request->input("nama_barang");
        $pembelian->total = $request->input("total");
        $pembelian->save();

        return redirect('pembelian');
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
        $pembelian = PembeliBengkel::find($id);
        $pembelian->delete();

        return redirect ('pembelian');
    }
}
