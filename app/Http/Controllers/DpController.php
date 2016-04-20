<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dp;
use App\tag;

use Illuminate\Support\Facades\Validator;




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
     
     public function sendForm()
    {
       
        //Get all the data and store it inside Store Variable
        $data = \Request::all();

        //Validation rules
        //{"_token":"dMKekQkq5Wqn4efEiXlNuEaYqpUIkU63HGwMed2c","name":"TestName","description":"Testdescription","baseComponent":"testbase","pdf":"testbaselink","val":"open","opensourceproject":"opensourcelink","tags":"teattag1,teattag2","eaglefile":"Breadboard_power r3.sch"}
        $rules = array (
            'name' => 'required',// uncomment if you want to grab this field
        //    'description' => 'required|min:10',
            //'email' => 'required|email',  uncomment if you want to grab this field
         //   'eaglefile' => 'required'
        );

        //Validate data
        $validator = Validator::make ($data, $rules);

        //If everything is correct than run passes.
        if ($validator -> passes()){
            
           

           \Mail::send('emails.newDp', $data, function($message) use ($data)
            {
                //$message->from($data['email'] , $data['first_name']); uncomment if using first name and email fields 
                $message->from('newDP@makerstorage', 'New Design Pattern Arrived');
                //email 'To' field: cahnge this to emails that you want to be notified.                    
                $message->to('nerginer@gmail.com', 'Nuri')->cc('nerginer@gnexlab.com')->subject('New Design Pattern');

            });
                // Redirect to page
                 return view('message')->with('message', 'Your message has been sent. Thank You!');


               
        }else{
                //return contact form with errors
                $errors = $validator->errors()->all();

                return view('message',compact('errors'));
                
                

        }
     }
    
   
    
    public function licence()
    {
        return view('licence');
    }
    
     public function message()
    {
        return view('message');
    }
     
}
