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
        $file_name = $request->photo->getClientOriginalName();
        $request->photo->storeAs('images', $file_name);

        $this->validate($request,[
            'name' => 'required',
            'photo' => 'required|mimes:jpg,jpeg,png',
            'type' => 'required',
            'description' => 'required|max:300',
            'price' => 'required|numeric'
        ]);

        Masakan::create([
            'name' => $request->name,
            'photo' => $request->photo,
            'type' => $request->type,
            'description' => $request->description,
            'price' => $request->price
        ]);
        return redirect('masakan', ['masakan' => $request]);
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
