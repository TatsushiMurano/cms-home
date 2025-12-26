<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }
    public function confirm(Request $request)
    {
        $validated = $request->validate([
            'company' => 'required|string|max:20',
            'name' => 'required|string|max:20',
            'phone' => 'required|regex:/^[0-9-]+$/',
            'mail' => 'required|email',
            'birthday' => 'required',
            'sex' => 'required',
            'job' => 'required',
            'contact' => 'required|string',
        ]);
        return view('contact.confirm',compact('validated'));
    }
    public function send()
    {
        return view('contact.send');
    }
}
