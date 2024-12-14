<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view("contact.contact");
    }

    public function contactadmin(){
        $allcontact = Contact::all();
        return view("contactadmin", ['contact' => $allcontact]);
    }

    public function store(Request $request)
    {
        $Contact = new Contact();
        $Contact->email =$request->get('email');
        $Contact->content =$request->get('content');
        $Contact->save();
    }
}
