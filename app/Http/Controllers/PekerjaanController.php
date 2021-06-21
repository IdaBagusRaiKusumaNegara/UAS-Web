<?php

namespace App\Http\Controllers;

use App\Models\Pekerjaan;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtPekerjaan = DB::table('pekerjaans')
            ->where('name', auth()->user()->name)
            ->get();
        //$dtPekerjaan = Pekerjaan::all();
        return view('Pekerjaan.pekerjaan', compact('dtPekerjaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dtPekerjaan = Unit::all();
        return view('Pekerjaan.create-pekerjaan', compact('dtPekerjaan'));
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
            'Kategori_Pekerjaan' => 'required',
            'Deskripsi_Pekerjaan' => 'required',
        ]);

        Pekerjaan::create([
            'name' => $request->user()->name,
            'Id_Unit_Kerja' => $request->user()->Id_Unit,
            'Kategori_Pekerjaan' => $request->Kategori_Pekerjaan,
            'Deskripsi_Pekerjaan' => $request->Deskripsi_Pekerjaan,
        ]);

        return redirect('pekerjaan')->with('success', 'Data Berhasil Dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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