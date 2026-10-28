<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Skin;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;

class SkinsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        //make a query (look at the documentation)
        $query = Skin::query();
//        $query->where('status',1);
        $query->when($search, function (Builder $query, $search) {

        });
        // show all the skins
        $skins = $query->get();
        return view('skins.index', compact('skins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //give all the authors
        $authors = Author::all();
        return view('skins.create', compact('authors'));
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
            'author_id' => 'required|numeric',
            'user_id'=>'required|numeric',
            'status' => 'required|numeric:',
            'img_url' => 'required',
            'source_url' => 'required',
            'file_url' => 'required',

        ]);

        $skin = new Skin();
        $skin->name = $request->input('name');
        $skin->description = $request->input('description');
        $skin->status = $request->input('status');
        $skin->user_id = $request->input('user_id');
        $skin->author_id = $request->input('author_id');
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
        return view('skins.show', compact('skin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skin $skin)
    {
        //
        $authors = Author::all();
        return view('skins.edit', compact('skin', 'authors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skin $skin)
    {
        //
        $request->validate([
            'name' => 'required|min:3',
            'description' => 'required|min:10',
            'author_id' => 'required|numeric',
            'user_id'=>'required|numeric',
            'status' => 'required|numeric:',
            'img_url' => 'required',
            'source_url' => 'required',
            'file_url' => 'required',

        ]);
        $skin->name = $request->input('name');
        $skin->description = $request->input('description');
        $skin->status = $request->input('status');
        $skin->user_id = $request->input('user_id');
        $skin->author_id = $request->input('author_id');
        $skin->img_url = $request->input('img_url');
        $skin->source_url = $request->input('source_url');
        $skin->file_url = $request->input('file_url');
        $skin->save();
        return redirect()->route('skins.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skin $skin)
    {
        $skin->delete();
        return redirect()->route('skins.index');
    }


    public function uploads()
    {
//        $query = Skin::query();
//        $query->where('user_id',);
    }
}
