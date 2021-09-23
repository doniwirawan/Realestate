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

        $villas = DB::table('realestate')->where('type', 'villa')->paginate(12);

        $hotels = DB::table('realestate')->where('type', 'hotel')->paginate(12);

        $lands = DB::table('realestate')->where('type', 'land')->paginate(12);

        return view('pages.home')->with([
            'realestate' => $realestate, 
            'villas' => $villas,
            'hotels' => $hotels,
            'lands' => $lands,
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
        $searchQuery = $request->name;
        $type = $request->type;
        $price = $request->price;


        $realestate = DB::table('realestate')
        ->where('name', 'like', "%" . $searchQuery . "%")
        ->where('price_usd', '<=', $price)
        ->orWhere('type',  $type)
        ->paginate(12);
        

        return view('pages.realestate')->with(['realestate' => $realestate]);
    }
}
