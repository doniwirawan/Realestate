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

        $maps = DB::table('realestate')->get();

        return view('pages.home')->with([
            'realestate' => $realestate, 
            'villas' => $villas,
            'hotels' => $hotels,
            'lands' => $lands,
            'maps' => $maps,
        ]);
    }

    public function type(Request $request)
    {
        $type = $request->type;

        if ($type === '') {
            return redirect('/realestate');
        }else if($type === 'all') {

            $realestate = DB::table('realestate')->paginate(12);

            return view('pages.realestate')->with(['realestate' => $realestate]);
        }else{
            $realestate = DB::table('realestate')->where('type', $type)->paginate(12);



            return view('pages.realestate')->with([
                'realestate' => $realestate
            ]);
        }

        
    }


    public function area(Request $request)
    {
        $area = $request->area;

        if ($area === '') {
            return redirect('/area/all');
        }else if ($area === 'all') {
            $realestate = DB::table('realestate')->paginate(12);
            return view('pages.realestate')->with(['realestate' => $realestate]);
        }else{
            $realestate = DB::table('realestate')->where('area', 'like', "%" . $area . "%")->paginate(12);

            return view('pages.realestate')->with([
                'realestate' => $realestate
            ]);
        }
    }

    public function about()
    {
        return view('pages.about');
    }

    // public function realestate()
    // {
    //     $realestate = DB::table('realestate')->paginate(12);

    //     return view('pages.realestate')->with(['realestate' => $realestate]);
    // }

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
        // $searchQuery = $request->name;
        $area = $request->area;
        $type = $request->type;
        $price = $request->price;


        $realestate = DB::table('realestate')
        ->where('area', 'like', "%" . $area . "%")
        ->where('type',  $type)
        ->where('price_usd', '<=', $price)
        ->paginate(12);
        

        return view('pages.realestate')->with(['realestate' => $realestate]);
    }
}
