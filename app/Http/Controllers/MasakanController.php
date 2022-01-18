<?php

namespace App\Http\Controllers;

use App\Masakan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masakans = Masakan::all(); 
        return view('masakan.index', compact('masakans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $masakans = Masakan::all(); 
        return view('masakan.create', compact('masakans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Masakan::create($request->all());
        $file_name = $request->photo->getClientOriginalName();
        $request->photo->store('images', $file_name);
        return redirect('masakan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Masakan $masakan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Masakan $masakan)
    {
        return view('masakan.edit',
        compact('masakan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Masakan $masakan)
    {
        $masakan->update($request->all());
        return redirect('masakan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Masakan $masakan)
    {
        $masakan->delete();
        return redirect('masakan');
    }
}
