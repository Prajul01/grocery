<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['row']=Image::all();

        return view('backend.image.index',compact('data') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $data['product']=Product::all();
        return view('backend.image.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
//        $file = $request->file('image_file');
//        if ($request->hasFile("image_file")) {
//            $fileName = time() . '_' . $file->getClientOriginalName();
//            $file->move(public_path('uploads/images/product'), $fileName);
//            $request->request->add(['image' => $fileName]);
//        }

        $row = Image::create($request->all());
        if($row){
            $request->session()->flash('success','Product Image Added ');
        } else{
            $request->session()->flash('error','Product Image Add failed, Try again');

        }
        return redirect()->route('image.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function display($url)
    {
        $parent = Product::where('url', $url)->firstorfail();
        $feat = Image::with(['feat','user'])->get();

        return view ('backend.image.index', compact('parent', 'feat'));
    }
}
