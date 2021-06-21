<?php

namespace App\Http\Controllers;

use App\Models\Pekerja;
use Illuminate\Http\Request;

class PekerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtPekerja = Pekerja::all();
        return view('Pekerja.pekerja', compact('dtPekerja'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pekerja.create-pekerja');
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
            'nama' => 'required|string|max:20'
        ]);

        Pekerja::create([
            'nama' => $request->nama,
        ]);

        return redirect('pekerja')->with('success', 'Data Berhasil Dibuat');
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
        $dtPekerja = Pekerja::findorfail($id);
        return view('Pekerja.edit-pekerja', compact('dtPekerja'));
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
            'nama' => 'required|string|max:20'
        ]);

        $dtPekerja = Pekerja::findorfail($id);
        $dtPekerja->update($request->all());
        return redirect('pekerja')->with('success', 'Data Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dtPekerja = Pekerja::findorfail($id);
        $dtPekerja->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
    }
}