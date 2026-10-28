<?php

namespace App\Http\Controllers;

use App\Models\Skin;
use Illuminate\Http\Request;

class UploadsController extends Controller
{

    public function index()
    {
        //get all the skins uploaded by the user
        $query = Skin::query();
        $query->where('user_id', auth()->id());
        $skins = $query->get();
        return view('uploads', compact('skins'));
    }

    public function update(Request $request, Skin $skin)
    {
        $request->validate([
            'status' => 'numeric:'
        ]);

        //if 0 -> 1, 1/other ->0
        if ($skin->status === 0) {
            $skin->status = 1;
        } else {
            $skin->status = 0;
        }
        $skin->save();
        return redirect()->back();
    }
}
