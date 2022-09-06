<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_tindakan;

class TindakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = M_tindakan::all();
        return view('tindakan')->with([
            'data' => $data
        ]);
        return view('tindakan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tindakancr');
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
            'action' => 'required',
            'description' => 'required'
        ]);
        $data = $request->except(['_token']);
        M_tindakan::insert($data); 
        return redirect('tindakan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = M_tindakan::findOrFail($id);
        return view('tindakanupd')->with([
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
            'action' => 'required',
            'description' => 'required'
        ]);
        $item = M_tindakan::findOrfail($id);
        $data = $request->except(['_token']);
        $item->update($data);
        return redirect('tindakan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = M_tindakan::findOrFail($id);
        $item->delete();
        return redirect('tindakan');
    }
}
