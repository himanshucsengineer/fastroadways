<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
   
public function send(Request $request){
        $this->validate($request, [
                        'name' => 'required',
                        'email' => 'required|email',
                        'city' => 'required',
                        'locto' => 'required',
                        'locfr' => 'required',
                        'num' => 'required',
                ]);

        Mail::send('email', [
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'locfr' => $request->get('locfr'),
                'locto' => $request->get('locto'),
                'num' => $request->get('num'),
                'city' => $request->get('city')],
                function ($message) {
                        $message->from('info@tirupatiinsurance.com');
                        $message->to('vikaspoonia17@gmail.com', 'Himanshu Goyal')
                                ->subject('Moving Form Data');
        });

        return back()->with('modal','true');;
        
    }
    
    
    
   
}