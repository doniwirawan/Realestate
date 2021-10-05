<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


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

    public function sold($id)
    {
        DB::table('realestate')->where('id', $id)->update([
            'sold' => 1,
        ]);

        return redirect('/admin');
    }

    public function update(Request $request)
    {
         $rules = [
            'name'  => 'required',
            'file'  => 'image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            'slug'  => 'unique:realestate',
            'area'  => 'required',
            'desc'  => 'required',
            'size'  => 'required|numeric',
            'location'  => 'required',
            'price_usd'  => 'required|numeric',
            'beds'  => 'numeric|nullable',
            'baths'  => 'numeric|nullable',
            'pools'  => 'numeric|nullable',
            'status'  => 'required',
            'type'  => 'required',
        ];

        $messages = [
            'name.required' => 'Name required.',
            'file.max' => 'File Max 3048Mb.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        if ($request->file('file')) {
            $filex = $request->file('file');

            $imageName = $filex->getClientOriginalName();

            $filex->move(public_path('storage/img'), $imageName);

            DB::table('realestate')->where('id', $request->id)->update([
                'img' => $imageName,
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'area' => $request->area,
                'desc' => $request->desc,
                'size' => $request->size,
                'location' => $request->location,
                'price_usd' => $request->price_usd,
                'beds' => $request->beds,
                'baths' => $request->baths,
                'pools' => $request->pools,
                'status' => $request->status,
                'type' => $request->type,
            ]);

        }else{

            DB::table('realestate')->where('id', $request->id)->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'area' => $request->area,
            'desc' => $request->desc,
            'size' => $request->size,
            'location' => $request->location,
            'price_usd' => $request->price_usd,
            'beds' => $request->beds,
            'baths' => $request->baths,
            'pools' => $request->pools,
            'status' => $request->status,
            'type' => $request->type,
            
           ]);

        }

        return back()->with('success', 'Realestate edited successfully.');
    }

    public function add(Request $request)
    {
        $rules = [
            'name'  => 'required',
            'file'  => 'image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            'slug'  => 'unique:realestate',
            'area'  => 'required',
            'desc'  => 'required',
            'size'  => 'required|numeric',
            'location'  => 'required|unique:realestate',
            'price_usd'  => 'required|numeric',
            'beds'  => 'numeric|nullable',
            'baths'  => 'numeric|nullable',
            'pools'  => 'numeric|nullable',
            'status'  => 'required',
            'type'  => 'required',
        ];

        $messages = [
            'name.required' => 'Name required.',
            'file.max' => 'File Max 3048Mb.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        if($request->file('file')){

            $file = $request->file('file');

            $imageName = $file->getClientOriginalName();

            $file->move(public_path('storage/img'), $imageName);

            DB::table('realestate')->insert([
                'img' => $imageName,
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'area' => $request->area,
                'type' => $request->type,
                'desc' => $request->desc,
                'size' => $request->size,
                'location' => $request->location,
                'price_usd' => $request->price_usd,
                'beds' => $request->beds,
                'baths' => $request->baths,
                'pools' => $request->pools,
                'status' => $request->status,
            ]);

        }else{

            DB::table('realestate')->insert([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'type' => $request->type,
                'area' => $request->area,
                'desc' => $request->desc,
                'size' => $request->size,
                'location' => $request->location,
                'price_usd' => $request->price_usd,
                'beds' => $request->beds,
                'baths' => $request->baths,
                'pools' => $request->pools,
                'status' => $request->status,

            ]);
        }

         return back()->with('success', 'Realestate added successfully.');
    }
}
