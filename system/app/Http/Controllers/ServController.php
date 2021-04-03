<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ServeMail;
use Illuminate\Support\Facades\Mail;

class ServController extends Controller
{
    function index()
    {
     return view('home');
    }
    
    function send(Request $request)
    {
     $this->validate($request, [
            'name'      =>  'required',
            'num'   =>   'required',
            'email'   =>   'required|email',
            'city'   =>   'required',
            'locto'   =>   'required',
            'locfr'   =>   'required',
     ]);

        $data = array(
            'name'      =>  $request->name,
            'num'   =>   $request->num,
            'email'   =>   $request->email,
            'city'   =>   $request->city,
            'locfr'   =>   $request->locfr,
            'locto'   =>   $request->locto,
        );

     Mail::to('vikaspoonia17@gmail.com')->send(new ServeMail($data));
     return back()->with('modal','true');
    
    }
}