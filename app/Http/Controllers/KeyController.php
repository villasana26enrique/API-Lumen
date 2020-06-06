<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class KeyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function generateKey()
    {
        return response()->json([
            'key' => \Illuminate\Support\Str::random(32)
        ]);
    }

    public function testUpdate(Request $request, $id) 
    {
        return response()->json([
            'id' => $id,
            'name' => $request->input('nombre'), 
            'apellido' => $request->input('apellido')
        ]);
    }

    public function testPost(Request $request)
    {
        return response()->json([
            'name' => $request->input('nombre'), 
            'apellido' => $request->input('apellido')
        ]);      
    }
}
