<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dp;


class DpController extends Controller
{
     public function index()
    {
        $dps = Dp::Paginate(1);
      //  $dps->setPath('custom/url');
        
       // return $dps;
        
        return view('dps.index',compact('dps'));
    }
    
     public function show(DP $dp)
    {
       
        //$dp = Dp::find($id);
        //return $dp;
        return view('dps.show',compact('dp'));
    }
}
