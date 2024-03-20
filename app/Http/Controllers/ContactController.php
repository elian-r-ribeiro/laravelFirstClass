<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index()
    {
        $contacts = Contact::all();

        return view('contact', compact('contacts'));
    }

    public function store()
    {
        $contact = new Contact();

        $contact->name = 'Elian Ribeiro';
        $contact->email = 'aaaaaaa@gmail.com';
        $contact->phoneNumber = '1234567890';
        $contact->birthDate = '2004-05-29';
        $contact->save();
    }

    public function update()
    {
        $contact = Contact::find(2);
        $contact->name = "El Ribeiro";
        $contact->save();

        #$contact = Contact::where('name', 'Elian Ribeiro') -> first();
        #$contact->name = "El Ribeiro";
        #$contact->save();
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
    }
}
