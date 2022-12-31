<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->paginate(7);
        return view('contact.index', compact('contacts'));
    }

    public function delete($id){
        Contact::find($id)->delete();
        return redirect()->back()->with('message', 'Contact Deleted Successfully');
    }
}
