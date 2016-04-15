<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dp;


class DpController extends Controller
{
     public function index()
    {
        $dps = Dp::all();
        
        return view('dp.dp',compact('dps'));
    }
}
