<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function admin()
    {
        $realestate = DB::table('realestate')->get();

        return view('pages.admin.dashboard')->with(['realestate' => $realestate]);
    }

    public function input()
    {

        return view('pages.admin.input');
    }

    public function delete($id)
    {
        $realestate = DB::table('realestate')->where('id', $id)->delete();

        return redirect('/admin');
    }

    public function edit($id)
    {
        $realestate = DB::table('realestate')->where('id', $id)->get();

        return view('pages.admin.edit', ['realestate' => $realestate]);
    }

    public function update(Request $request)
    {


        $filex = $request->file('file');

        $imageName = $filex->getClientOriginalName();

        $filex->move(public_path('img'), $imageName);

        DB::table('realestate')->where('id', $request->id)->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'type' => $request->type,
            'img' => $imageName,
            'desc' => $request->desc,
            'size' => $request->surface,
            'location' => $request->location,
            'price_usd' => $request->price_usd,
            'beds' => $request->location,
            'baths' => $request->price_usd,
            'pools' => $request->price_usd,
        ]);

        return redirect('/admin');
    }

    public function add(Request $request)
    {
        // ini lama
        $file = $request->file('file');

        $imageName = $file->getClientOriginalName();

        $file->move(public_path('img'), $imageName);

        DB::table('realestate')->insert([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'type' => $request->type,
            'img' => $imageName,
            'desc' => $request->desc,
            'size' => $request->surface,
            'location' => $request->location,
            'price_usd' => $request->price_usd,
            'beds' => $request->location,
            'baths' => $request->price_usd,
            'pools' => $request->price_usd,

        ]);


        return redirect('/admin');
    }

     
}
