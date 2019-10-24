<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambahDataBarang()
    {
        return view('admin.dataBarang');
    }
    // public function viewUpdate($id)
    // {
    //     $data = Barang::find($id);
    //     return view ('admin.dataBarang', compact('data'));
    // }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tambahBarang(Request $request)
    {
        $insert =([
            'nama_barang'=> $request->nama_barang,
            'harga'=> $request->harga,
            'kode'=> $request->kode,
            'stok'=> $request->stok,
            'status'=>$request->status,
        ]);
        Barang::create($insert);
        return redirect('/tambahDataBarang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function dataBarang()
    {
        $tampil = Barang::where('status','ada')->get();
        return view ('admin.dataBarang', compact('tampil'));
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
    public function updateBarang(Request $request, $id)
    {
        $ubah= Barang::find($id);
        $ubah->nama_barang=$request->nama_barang;
        $ubah->harga=$request->harga;
        $ubah->kode=$request->kode;
        $ubah->stok=$request->stok;
        $ubah->status=$request->status;
        $ubah->save();
        return redirect('/tambahDataBarang');
    }
    public function hapusBarang(Request $request, $id)
    {
        $ubah= Barang::find($id);
        $ubah->status=$request->status;
        $ubah->save();
        return redirect('/tambahDataBarang');
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
