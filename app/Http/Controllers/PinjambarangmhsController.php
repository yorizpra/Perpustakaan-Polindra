<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use App\Pinjambarangmhs;
use App\Person;
use App\Item;
use DB;

class PinjambarangmhsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = DB::table('borrow_item_mhs')
            ->join('people', 'people.id_user', '=', 'borrow_item_mhs.id_user')
            ->join('items', 'items.id_buku', '=', 'borrow_item_mhs.id_buku')
            ->select('borrow_item_mhs.*', 'people.*', 'items.*')
            ->where('people.id_user', session('id_user'))
            ->get();
            return view('pinjambarangmhs/index', compact('datas'));
    }

    public function indexAdmin()
    {
        $datas = DB::table('borrow_item_mhs')
            ->join('people', 'people.id_user', '=', 'borrow_item_mhs.id_user')
            ->join('items', 'items.id_buku', '=', 'borrow_item_mhs.id_buku')
            ->select('borrow_item_mhs.*', 'people.*', 'items.*')
            
            ->get();
            return view('admin_pbm/index', compact('datas'));
    }
    
    public function indexKajur()
    {
        $datas = DB::table('borrow_item_mhs')
            ->join('people', 'people.id_user', '=', 'borrow_item_mhs.id_user')
            ->join('items', 'items.id_buku', '=', 'borrow_item_mhs.id_buku')
            ->select('borrow_item_mhs.*', 'people.*', 'items.*')
            
            ->get();
            return view('rekap_pbm/index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datas = Person::select('id_user','nama')->where('id_user', session('id_user'))->get();
        $barang = Item::select('id_buku','judul')->get();
        return view('/pinjambarangmhs/create',compact('datas', 'barang'));
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
            'id_user' => 'required|max:255',
            'id_buku' => 'required',
            'jumlah_pinjam' => 'required',
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required',
            'status' => 'required',
            'ket' => 'required',
        ],
            [
                'required'      => ':attribute tidak boleh kosong',
                'min'           => ':attribute tidak boleh kurang dari :min',
                'max'           => ':attribute tidak boleh lebih dari :max'
               
        
        ]);

        $data = new Pinjambarangmhs();
     
        $data->id_user = $request->input('id_user');
        $data->id_buku = $request->input('id_buku');
        $data->jumlah_pinjam = $request->input('jumlah_pinjam');
        $data->tgl_pinjam = $request->input('tgl_pinjam');
        $data->tgl_kembali = $request->input('tgl_kembali');
        $data->status = $request->input('status');
        $data->ket = $request->input('ket');
        $data->save();
        return redirect('/pinjambarangmhs')->with('status','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pinjambarangmhs  $pinjambarangmhs
     * @return \Illuminate\Http\Response
     */
    public function show(Pinjambarangmhs $pinjambarangmhs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pinjambarangmhs  $pinjambarangmhs
     * @return \Illuminate\Http\Response
     */
    public function edit($id_peminjaman)
    {
        $data = Pinjambarangmhs::findOrFail($id_peminjaman);
        return view('admin_pbm/edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pinjambarangmhs  $pinjambarangmhs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_peminjaman)
    {
        $data = Pinjambarangmhs::findOrFail($id_peminjaman);
        
        $request->validate([
            'status' => 'required'
        ]);

        Pinjambarangmhs::where('id_peminjaman', $data->id_peminjaman)->update([
            'status' => $request->status
        ]);

        $data->save();
        return redirect('/admin_pbm')->with('status','Data Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pinjambarangmhs  $pinjambarangmhs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pinjambarangmhs $pinjambarangmhs)
    {
        //
    }
}
