<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;
use App\Mail\Contacter;

class ContactController extends Controller
{
    public function contact()
    {

        return view('contact');
    }

    

    public function contactBD(Request $request)
    {
        Mail::to('amenibenslimen9@gmail.com')->send(new Contacter($request->except('_token')));
        return redirect()->back()->with(['success' => 'Votre message est envoyer avec succées...']); 
    } 
} 
