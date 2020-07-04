<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // menampilkan semua data
        // $users = DB::table('persons')->get();
        $users = Person::all();
        return view('users/index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $users = new Person;
        // $users->id_user = $request->id_user;
        // $users->nama = $request->nama;
        // $users->jenis_kelamin = $request->jenis_kelamin;
        // $users->no_telepon = $request->no_telepon;
        // $users->alamat = $request->alamat;
        // $users->level_user = $request->level_user;

        // $users->save();

        // Person::create([
        //    'id_user' => request('id_user'), 
        //    'nama' => request('nama'), 
        //    'jenis_kelamin' => request('jenis_kelamin'), 
        //    'no_telepon' => request('no_telepon'), 
        //    'alamat' => request('alamat'), 
        //    'level_user' => request('level_user')
        // ]);

        $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'no_telepon' => 'required',
            'alamat' => 'required',
            'level_user' => 'required'
        ]);

        Person::create($request->all());

        return redirect('/users')->with('status', 'Data User Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // menampilkan 1 data tapi detail
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Person $usr)
    {
        return view('users/edit', compact('usr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Person $usr)
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

        Person::where('id_user', $usr->id_user)->update([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_telepon' => $request->no_telepon,
            'alamat' => $request->alamat
        ]);
        return redirect('/users')->with('status', 'Data User Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $usr)
    {
        Person::destroy($usr->id_user);
        return redirect('/users')->with('status', 'Data User Berhasil Dihapus!');

    }
}
