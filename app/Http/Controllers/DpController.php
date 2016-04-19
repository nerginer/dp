<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dp;
use App\tag;




class DpController extends Controller
{
    
    
//       public function __construct()
//    {
//        $this->middleware('auth');
//    }
    
    
     public function index()
    {
        $dps = Dp::Paginate(4);
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
       
       $dps = $tag->dps()->Paginate(4);
    
       //return $dps;
       return view('dps.index',compact('dps'),compact('tag'));
        
    }
    
    public function search(Request $request)
    {
       	// Gets the query string from our form submission 
        $search = \Request::get('search');
       	
       	$dps = Dp::where('name', 'LIKE', '%' . $search . '%')->paginate(4);
        
        $tag = 0;  
        
        return view('dps.index',compact('dps'),compact('tag'));  

     }
     
     
     

    
    
    public function licence()
    {
        return view('licence');
    }
     
}
