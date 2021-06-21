<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\User;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtUser = User::with('unit');
        $dtUser = User::all();
        return view('Pengguna.pengguna', compact('dtUser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dtUnit = Unit::all();
        return view('Pengguna.create-pengguna', compact('dtUnit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:20',
            'level' => 'required',
            'Nomor_HP' => 'required|string|min:12|max:12',
            'Id_Unit' => 'required',
            'email' => 'required|string|max:20',
            'password' => 'required|string|min:8|max:20'
        ]);

        User::create([
            'name' => $request->name,
            'level' => $request->level,
            'Nomor_HP' => $request->Nomor_HP,
            'Id_Unit' => $request->Id_Unit,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return redirect('pengguna')->with('success', 'Data Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dtUnit = Unit::all();
        $dtUser = User::findorfail($id);
        return view('Pengguna.detail-pengguna', compact('dtUser', 'dtUnit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dtUnit = Unit::all();
        $dtUser = User::findorfail($id);
        return view('Pengguna.edit-pengguna', compact('dtUser', 'dtUnit'));
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
        $this->validate($request, [
            'name' => 'required|string|max:20',
            'level' => 'required',
            'Nomor_HP' => 'required|string|min:12|max:12',
            'Id_Unit' => 'required',
            'email' => 'required|string|max:20',
            'password' => 'required|string|min:8|max:20'
        ]);

        $dtUser = User::findorfail($id);
        $dtUser->update($request->all());
        return redirect('pengguna')->with('success', 'Data Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dtUser = User::findorfail($id);
        $dtUser->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
    }
}