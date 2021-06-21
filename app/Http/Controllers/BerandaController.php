<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\Matcher\AndAnyOtherArgs;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtUsers = DB::table('pekerjaans')->count();
        $dtPending = DB::table('pekerjaans')
            ->where('Status_Pekerjaan', 'Pending')
            ->count();
        $dtProses = DB::table('pekerjaans')
            ->where('Status_Pekerjaan', 'Process')
            ->count();
        $dtCompleted = DB::table('pekerjaans')
            ->where('Status_Pekerjaan', 'Completed')
            ->count();

        $dtPekerjaanUser = DB::table('pekerjaans')->where('name', auth()->user()->name)->count();
        $dtPendingUser = DB::table('pekerjaans')
            ->where('Status_Pekerjaan', 'Pending')->where('name', auth()->user()->name)
            ->count();
        $dtPorsesUser = DB::table('pekerjaans')
            ->where('Status_Pekerjaan', 'Process')->where('name', auth()->user()->name)
            ->count();
        $dtCompletedUser = DB::table('pekerjaans')
            ->where('Status_Pekerjaan', 'Completed')->where('name', auth()->user()->name)
            ->count();
        return view('Beranda.beranda', compact('dtUsers', 'dtPending', 'dtProses', 'dtCompleted', 'dtPekerjaanUser', 'dtPendingUser', 'dtPorsesUser', 'dtCompletedUser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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