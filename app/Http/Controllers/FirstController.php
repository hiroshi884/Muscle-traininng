<?php

namespace App\Http\Controllers;

use App\Models\First;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth ;

class FirstController extends Controller
{
     public function first(){
    return view('firsts.first');
    }   
}
