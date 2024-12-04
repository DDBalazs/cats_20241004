<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\image;

class CatsContrller extends Controller
{
    public function AllCats(){
        return view('welcome',[
            'result' => image::all()
        ]);
    }
}
