<?php

namespace App\Http\Controllers;

//Utilizar el objeto User.php en la ruta Http/User.php
use App\User;

class UserController extends Controller
{
    function metodousuarios (){
        //return 'Usuarios';
        
        //Enviar respuesta con json
        //return response()->json([],200);

        //Enviar respuesta con jason y datos
        $user = new User();
        $user->name = 'Anderson';
        $user->email = 'andersonmikol@live';
        return response()->json([$user],200);
        
    }
}
