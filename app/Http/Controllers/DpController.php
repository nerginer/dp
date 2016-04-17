<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dp;
use App\tag;



class DpController extends Controller
{
     public function index()
    {
        $dps = Dp::Paginate(3);
        $tag = 0;
        
       // return $dps;
        
        return view('dps.index',compact('dps'),compact('tag'));
    }
    
     public function show(DP $dp)
    {
       
        //$tags = $dp->tags();
        //return $tags;
        return view('dps.show',compact('dp'));
    }

     public function tag(tag $tag)
    {
       
       $dps = $tag->dps()->Paginate(3);
    
       //return $dps;
       return view('dps.index',compact('dps'),compact('tag'));
        
    }
}
