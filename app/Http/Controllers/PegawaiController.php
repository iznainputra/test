<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_pegawai;


class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showpegawai()
    {
        $data = M_pegawai::all();
        return view('pegawai')->with([
            'data' => $data
        ]);
        return view('pegawai');
    }

   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawaicr');
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
            'nik' => 'required',
            'name' => 'required',
            'address' => 'required',
            'birth' => 'required',
            'email' => 'required|unique:tbuser'
        ]);
        $data = $request->except(['_token']);
        M_pegawai::insert($data); 
        return redirect('pegawai');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = M_pegawai::findOrFail($id);
        return view('pegawaiupd')->with([
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
    public function update(Request $request, $id)
    {
        $request->validate([
            'nik' => 'required',
            'name' => 'required',
            'address' => 'required',
            'birth' => 'required',
            'email' => 'required|unique:tbuser'
        ]);
        $item = M_pegawai::findOrfail($id);
        $data = $request->except(['_token']);
        $item->update($data);
        return redirect('pegawai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = M_pegawai::findOrFail($id);
        $item->delete();
        return redirect('pegawai');
    }
}
