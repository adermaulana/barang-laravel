<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Supplier;
use App\Http\Requests\StoreBarangRequest;
use App\Http\Requests\UpdateBarangRequest;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.barang.index',[
            'title' => 'Data Barang',
            'barangs' => Barang::latest()->paginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.barang.create',[
            'title' => 'Tambah Data Barang',
            'suppliers' => Supplier::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBarangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBarangRequest $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'supplier_id' => 'required',
            'stok' => 'required',
            'jenis' => 'required'
        ]);


        Barang::create($validatedData);

        return redirect('/dashboard/barang')->with('success','Barang baru ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        return view('dashboard.barang.show',[
            'barangs' => $barang,
            'title' => 'Details'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        return view('dashboard.barang.edit',[
            'title' => 'Edit Data',
            'barang' => $barang,
            'suppliers' => Supplier::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBarangRequest  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBarangRequest $request, Barang $barang)
    {
        $rules = [
            'nama' => 'required|max:255',
            'supplier_id' => 'required',
            'stok' => 'required',
            'jenis' => 'required'
        ];
        
        $validateData = $request->validate($rules);

        Barang::where('id',$barang->id)
            ->update($validateData);

        return redirect('/dashboard/barang')->with('success','Barang telah Ter-update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        Barang::destroy($barang->id);

        return redirect('/dashboard/barang')->with('success','Barang telah dihapus');
    }
}
