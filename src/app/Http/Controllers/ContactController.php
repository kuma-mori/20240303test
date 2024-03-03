<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
    {
        $contact = $request->only(['category','first_name', 'last_name', 'gender', 'email', 'tel1', 'tel2', 'tel3', 'address', 'building', 'detail']);
        return view('confirm',['contact' => $contact]);
    }

    public function store(Request $request)
    {
        $tel1 = $request->input('tel1');
        $tel2 = $request->input('tel2');
        $tel3 = $request->input('tel3');

        $tel = $tel1 . $tel2 . $tel3;

        $contacts = $request->only(['category','first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'building', 'detail']);
        Contact::create($contact);
        return view('thanks');
    }
}
