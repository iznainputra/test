<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_pasien;
use App\Models\M_obat;
use App\Models\M_tindakan;
use DB;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showpasien()
    {
        $data = M_pasien::all();
        return view('pasien')->with([
            'data' => $data
        ]);
        return view('pasien');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fpasien()
    {
        $obat = M_obat::all();
        $tindakan = M_tindakan::all();
        return view('pasiencr', compact('obat','tindakan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function crpasien(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'birth' => 'required',
            'telephone' => 'required'
        ]);
        $data = $request->except(['_token']);
        M_pasien::insert($data); 
        return redirect('pasien');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function shpasien($id)
    {
        $obat = M_obat::all();
        $tindakan = M_tindakan::all();
        $data = M_pasien::findOrFail($id);
        return view('pasienupd', compact('obat','tindakan'))->with([
            'data' => $data
        ]);
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
    public function updatepasien(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'birth' => 'required',
            'telephone' => 'required',
            'action_id' => 'required',
            'medicine_id' => 'required'
        ]);
        $item = M_pasien::findOrfail($id);
        $data = $request->except(['_token']);
        $item->update($data);
        return redirect('pasien');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function depasien($id)
    {
        $item = M_pasien::findOrFail($id);
        $item->delete();
        return redirect('pasien');
    }

    public function chart()
    {
        $users = M_pasien::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
        ->whereYear('created_at', date('Y'))
        ->groupBy(DB::raw("month_name"))
        ->orderBy('pasien_id','ASC')
        ->pluck('count', 'month_name');

        $labels = $users->keys();
        $data = $users->values();
        
        return view('chartpasien', compact('labels', 'data'));
    }
}
