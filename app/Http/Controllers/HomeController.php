<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\EmailContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function contact(ContactRequest $request)
    {
        Mail::to('manuelsansoresg@gmail.com')->send(new EmailContact($request->all()));
        return response()->json($request->all());
    }
}
