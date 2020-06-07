<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TestController extends Controller
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

    public function testGet() 
    {
        return response()->json("Hello World!", 201);
    }

    public function testUpdate(Request $request, $id) 
    {
        //validate incoming request 
        $this->validate($request, [
            'name' => 'required|string',
            'lastname' => 'required|string'
        ]);
        
        return response()->json([
            'id' => $id,
            'name' => $request->input('name'), 
            'apellido' => $request->input('lastname')
        ], 201);
    }

    public function testPost(Request $request)
    {
        //validate incoming request 
        $this->validate($request, [
            'name' => 'required|string',
            'lastname' => 'required|string'
        ]);

        return response()->json([
            'name' => $request->input('name'), 
            'apellido' => $request->input('lastname')
        ], 201);      
    }
}
