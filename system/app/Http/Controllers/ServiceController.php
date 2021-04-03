<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class ServiceController extends Controller
{
    function index()
    {
     return view('home');
    }
    
    function send(Request $request)
    {
     $this->validate($request, [
            'cname'      =>  'required',
            'number'   =>   'required',
            'reg'   =>   'required',
            'add'   =>   'required',
            'text'   =>   'required',
     ]);

        $data = array(
            'cname'      =>  $request->cname,
            'number'   =>   $request->number,
            'reg'   =>   $request->reg,
            'add'   =>   $request->add,
            'text'   =>   $request->text,
        );

     Mail::to('vikaspoonia17@gmail.com')->send(new SendMail($data));
     return back()->with('success', 'Thanks for contacting us!');
    }
}