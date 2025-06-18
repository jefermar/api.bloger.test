<?php

namespace App\Http\Controllers;
use App\Models\Apprentice;
use Illuminate\Http\Request;

class ApprenticeController extends Controller
{
    //
     public function index(){
        $apprentices=Apprentice::all();
        return response()->json($apprentices);
    }
    public function store(Request $request){
        $request->validate([
            'name',
            'email',
            'cell_number'
        ]);

        $apprentices=Apprentice::create($request->all());
        return response()->json($apprentices);
    }
   
    public function show($id){
        $apprentices=Apprentice::findOrFail($id);
        return response()->json($apprentices);
    }
}
