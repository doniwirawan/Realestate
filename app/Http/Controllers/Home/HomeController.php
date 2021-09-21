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

        $realestate2 = DB::table('realestate')->paginate(12);

        return view('pages.home')->with([
            'realestate' => $realestate, 
            'realestate2' => $realestate2
        ]);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function realestate()
    {
        $realestate = DB::table('realestate')->paginate(12);

        return view('pages.realestate')->with(['realestate' => $realestate]);
    }

    public function single($slug)
    {
        $single = DB::table('realestate')->where('slug', $slug)->get();

        return view('pages.detail')->with(['single' => $single]);
    }

    public function contact()
    {

        return view('pages.contact');
    }

    public function maps()
    {
        $realestate = DB::table('realestate')->get();

        return view('pages.maps')->with(['realestate' => $realestate]);
    }

    public function search(Request $request)
    {
        $searchQuery = $request->keyword;

        $realestate = DB::table('realestate')->where('name', 'like',"%".$searchQuery."%")->paginate(12);

        return view('pages.realestate')->with(['realestate' => $realestate]);
        // return response()->json(['realestate' => $realestate]);
    }
}
