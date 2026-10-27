<?php

namespace App\Http\Controllers;

use App\Models\Skin;
use Illuminate\Http\Request;

class SkinsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // show all the skins
        $skins = Skin::all();
        return view('skins.index', compact('skins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // een leeg form laten zien

        return view('skins.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validatie op data
        $request->validate([
            'name' => 'required|min:3',
            'description' => 'required|min:10',
            'status' => 'required|numeric:',
            'img_url' => 'required',
            'source_url' => 'required',
            'file_url' => 'required',

        ]);

        $skin = new Skin();
        $skin->name = $request->input('name');
        $skin->description = $request->input('description');
        $skin->status = $request->input('status');
        $skin->img_url = $request->input('img_url');
        $skin->source_url = $request->input('source_url');
        $skin->file_url = $request->input('file_url');

        $skin->save();

        //redirect naar products.index
        return redirect()->route('skins.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Skin $skin)
    {
        //
//        dd($skin);
        return view('skins.show', compact('skin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skin $skin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skin $skin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skin $skin)
    {
        //
    }
}
