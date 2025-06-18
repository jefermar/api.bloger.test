<?php

namespace App\Http\Controllers;
use App\Models\Computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    //
    public function index(){
        $computers=Computer::all();
        return response()->json($computers);
    }
     public function store(Request $request)
    {

        $request->validate([
            'number',
            'brand'
        ]);

        $computers=Computer::create($request->all());
        return response()->json($computers);
    }

     public function show($id) 
    {
        $computers=Computer::findOrFail($id);
        return response()->json($computers);
    }
}
