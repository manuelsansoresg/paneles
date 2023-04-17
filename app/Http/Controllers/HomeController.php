<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Lib\Banxico;
use App\Mail\EmailContact;
use App\Models\Banner;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        if (Auth::user()->role('admin')->first() == null) {
            return view('home');
        }
        return view('home_admin');
    }

    public function paneles()
    {
        $panels = Product::getActives(1);
        
        return view('paneles', compact('panels'));
    }

    public function welcome()
    {
        $banxico = new Banxico();
        $banners = Banner::getActives();
        return view('welcome', compact('banners'));
    }

    public function contact(ContactRequest $request)
    {
        Mail::to('manuelsansoresg@gmail.com')->send(new EmailContact($request->all()));
        return response()->json($request->all());
    }
}
