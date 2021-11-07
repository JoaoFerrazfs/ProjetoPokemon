<?php

namespace App\Http\Controllers;

use Jenssegers\Mongodb\Eloquent\Model;
use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TrainerController extends Controller
{
    public function store(Request $request)
    {
        

        $mont = ([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password)

        ]);

        Trainer::create($mont);

        
        return redirect('/login')->with('msg','Você foi cadastrado! Deseja Acessar?');
    }
}
