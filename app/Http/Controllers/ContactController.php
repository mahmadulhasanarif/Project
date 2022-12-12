<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->paginate(3);
        return view('contact.index', compact('contacts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'address'=>'required',
            'message'=>'required',
        ],
        [
            'name.required'=>'Please Enter Name',
            'phone.required'=>'Please Enter a phone',
            'email.required'=>'Please Enter Email',
            'address.required'=>'Please Enter Address',
            'message.required'=>'Your Question',
        ]);

        Contact::insert([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'address'=>$request->address,
            'message'=>$request->message,
            'created_at'=>Carbon::now()
        ]);

        return response()->json([
            'status'=>'success'
        ]);
    }

    public function delete(Request $request){
        Contact::find($request->contact_id)->delete();
        return response()->json([
            'status'=>'success'
        ]);
    }
}
