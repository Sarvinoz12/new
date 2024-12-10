<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
    }

    public function create(Request $request)
    {

        Contact::create([
            'name' => $request->name??null,
            'email'=>$request->email??null,
            'message'=>$request->message??null,
            'telephone'=>$request->telephone??null,
            'order'=>$request->order ?? null
        ]);
        return redirect()->back();

    }

    public function delete($id)
    {
        Contact::find($id)->delete();
        return redirect()->back();
    }

}
