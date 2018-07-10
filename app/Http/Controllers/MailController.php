<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;
use Mailchimp;

class MailController extends Controller
{
    public function store(Request $request){
	
			Mail::send('emails.contactos',$request->all(),function($msj){
			$msj->from('info@jbgmtech.com');
			$msj->subject('Informacion de contacto desde jbgmtech.com');
			$msj->to('info@jbgmtech.com');
			
			});

	
		return redirect()->back()->with('flash_message','Gracias');
		}
}
