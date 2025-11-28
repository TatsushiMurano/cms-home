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
    public function confirm()
    {
        return view('contact.confirm');
    }
    public function send()
    {
        return view('contact.send');
    }
}
