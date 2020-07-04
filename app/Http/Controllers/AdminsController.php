<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::all();
        
        return view('admins/index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins/create');
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
            'nama' => 'required|min:4|max:255',
            'jenis_kelamin' => 'required',
            'no_telepon' => 'required',
            'alamat' => 'required',
            [
                'required'      => 'Data tidak boleh kosong',
                'min'           => 'Data kurang dari batas minimum',
                'max'           => 'Data lebih dari batas maksimal'
               
        ]
        ]);

        Admin::create($request->all());

        return redirect('/admins')->with('status', 'Data Admin Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        return view('admins/edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        $request->validate([
            'nama' => 'required|min:4|regex:/^[a-zA-Z\s]*$/',
            'jenis_kelamin' => 'required|string',
            'no_telepon' => 'required|numeric',
            'alamat' => 'required|string'
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

        Admin::where('id_admin', $admin->id_admin)->update([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_telepon' => $request->no_telepon,
            'alamat' => $request->alamat
        ]);
        return redirect('/admins')->with('status', 'Data Admin Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        Admin::destroy($admin->id_admin);
        return redirect('/admins')->with('status', 'Data Admin Berhasil Dihapus!');
    }
}
