<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

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

        $contact->name = Crypt::encryptString('Elian Ribeiro');
        $contact->email = Crypt::encryptString('aaaaaaa@gmail.com');
        $contact->phoneNumber = Crypt::encryptString('1234567890');
        $contact->birthDate = Crypt::encryptString('2004-05-29');
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

    public function decripty()
    {
        $contact = Contact::find(5);
        $contact -> name = Crypt::decryptString($contact->name);
        $contact -> email = Crypt::decryptString($contact->email);
        $contact -> phoneNumber = Crypt::decryptString($contact->phoneNumber);
        $contact -> birthDate = Crypt::decryptString($contact->birthDate);
        dd($contact);
    }
}
