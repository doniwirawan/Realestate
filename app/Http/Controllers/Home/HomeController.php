<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $realestate = DB::table('realestate')->orderBy('id', 'desc')->take(5)->get();

        return view('pages.home')->with(['realestate' => $realestate]);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function realestate()
    {
        $realestate = DB::table('realestate')->paginate(3);

        return view('pages.realestate')->with(['realestate' => $realestate]);
    }

    public function contact()
    {

        return view('pages.contact');
    }

    public function contactForm(Request $request)
    {

        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $message = $request->message;

        

    }


    public function maps()
    {
        $realestate = DB::table('realestate')->get();

        return view('pages.maps')->with(['realestate' => $realestate]);
    }
}
