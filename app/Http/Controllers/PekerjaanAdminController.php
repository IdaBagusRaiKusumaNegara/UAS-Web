<?php

namespace App\Http\Controllers;

use App\Models\Pekerja;
use Illuminate\Http\Request;
use App\Models\Pekerjaan;
use App\Models\Unit;

class PekerjaanAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtPekerjaan = Pekerjaan::with('unit');
        $dtPekerjaan = Pekerjaan::all();
        return view('Pekerjaan.pekerjaanAdmin', compact('dtPekerjaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pekerjaan.create-pekerjaan');
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
            'Pekerja' => implode(',', $request->Pekerja)
        ]);

        return redirect('pekerjaanAdmin')->with('success', 'Data Berhasil Dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dtPekerja = Pekerja::all();
        $dtUnit = Unit::all();
        $dtPekerjaan = Pekerjaan::findorfail($id);
        for ($i = 2; $i < 18; $i += 2) {
            $a = 0;
            $val[$a] = $dtPekerjaan->Pekerja[$i];
            $a++;
        }
        return view('Pekerjaan.detail-pekerjaan', compact('dtPekerjaan', 'dtUnit', 'dtPekerja', 'val'));
    }

    public function cetakPekerjaan($id)
    {
        $dtUnit = Unit::all();
        $dtPekerjaan = Pekerjaan::findorfail($id);
        return view('Cetak.cetak', compact('dtPekerjaan', 'dtUnit'));
    }

    public function cetakPekerjaanPertanggal($tanggal_awal, $tanggal_akhir)
    {
        $dtRekap = Pekerjaan::with('unit')->whereBetween('created_at', [$tanggal_awal, $tanggal_akhir])->get();
        return view('Cetak.cetakAll', compact('dtRekap'));
    }

    public function rekapPekerjaan()
    {
        return view('Cetak.rekapPekerjaan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dtPekerja = Pekerja::all();
        $dtPekerjaan = Pekerjaan::findorfail($id);
        return view('Pekerjaan.edit-pekerjaan', compact('dtPekerjaan', 'dtPekerja'));
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
            'Kategori_Pekerjaan' => 'required',
            'Deskripsi_Pekerjaan' => 'required',
            'Keterangan' => 'required',
            'Pekerja' => 'required',
            'Status_Pekerjaan' => 'required',
        ]);

        $arrayToString = implode(',', $request->input('Pekerja'));
        $inputValue['Pekerja'] = $arrayToString;

        Pekerjaan::create([
            'name' => $request->user()->name,
            'Id_Unit_Kerja' => $request->user()->Id_Unit,
            'Kategori_Pekerjaan' => $request->Kategori_Pekerjaan,
            'Deskripsi_Pekerjaan' => $request->Deskripsi_Pekerjaan,
            $inputValue
        ]);

        $dtPekerjaan = Pekerjaan::findorfail($id);
        $dtPekerjaan->update($request->all());

        return redirect('pekerjaanAdmin')->with('success', 'Data Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dtPekerjaan = Pekerjaan::findorfail($id);
        $dtPekerjaan->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
    }
}