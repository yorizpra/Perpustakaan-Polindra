<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        
        return view('items/index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('items/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'jenis_buku' => 'required',
            'pengarang' => 'required|regex:/^[a-zA-Z\s]*$/',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'jumlah_buku' => 'required',
            'deskripsi' => 'required'
        ],
            [
                'required'      => 'Data tidak boleh kosong',
                'min'           => ':attribute harus lebih dari :min',
                'max'           => 'Data lebih dari batas maksimal',
                'numeric' => ':attribute tidak boleh diisi dengan nomor',
                'string' => ':attribute tidak boleh diisi dengan angka',
                'regex' => ':attribute tidak boleh diisi dengan angka'
            ]
    );

        Item::create($request->all());

        return redirect('/items')->with('status', 'Data Buku Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        return view('items/edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $request->validate([
            'judul' => 'required',
            'jenis_buku' => 'required',
            'pengarang' => 'required|regex:/^[a-zA-Z\s]*$/',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'jumlah_buku' => 'required',
            'deskripsi' => 'required'
        ],
            [
                'required'      => 'Data tidak boleh kosong',
                'min'           => ':attribute harus lebih dari :min',
                'max'           => 'Data lebih dari batas maksimal',
                'numeric' => ':attribute tidak boleh diisi dengan nomor',
                'string' => ':attribute tidak boleh diisi dengan angka',
                'regex' => ':attribute tidak boleh diisi dengan angka'
            ]
    );

        Item::where('id_buku', $item->id_buku)->update([
            'judul' => $request->judul,
            'jenis_buku' => $request->jenis_buku,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'jumlah_buku' => $request->jumlah_buku,
            'deskripsi' => $request->deskripsi
        ]);
        return redirect('/items')->with('status', 'Data Buku Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        Item::destroy($item->id_buku);
        return redirect('/items')->with('status', 'Data Buku Berhasil Dihapus!');
    }
}
