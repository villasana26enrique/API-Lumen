<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use  App\User;

class UserController extends Controller
{
     /**
     * Instantiate a new UserController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Obtiene el usuario Logueado.
     *
     * @return Response
     */
    public function profile()
    {
        return response()->json(['usuario' => Auth::user()], 200);
    }

    /**
     * Listado de Usuarios.
     *
     * @return Response
     */
    public function allUsers()
    {
         return response()->json(['users' =>  User::all()], 200);
    }

    /**
     * Obtiene Usuario especifico.
     *
     * @return Response
     */
    public function singleUser($id)
    {
        try {
            $user = User::findOrFail($id);

            return response()->json(['usario' => $user], 200);

        } catch (\Exception $e) {

            return response()->json(['mensaje' => 'No Existe Usuario!'], 404);
        }

    }

}