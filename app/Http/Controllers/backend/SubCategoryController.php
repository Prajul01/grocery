<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Setting;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['row']=SubCategory::all();
        return view('backend.category-sub.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['category']=Category::all();
        return view('backend.category-sub.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate
        ([
            'email' => "unique:users,email,$this->id,id"

        ]);
        $file = $request->file('image_file');
        if ($request->hasFile("image_file")) {
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/images/subcategory'), $fileName);
            $request->request->add(['image' => $fileName]);
        }
        $data['row']=SubCategory::create($request->all());
        if ($data['row']){
            request()->session()->flash('success','suscribed');
        }else{
            request()->session()->flash('error','Task failed');
        }
        return redirect()->route('index',compact('data'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['row']=SubCategory::find($id);
        return view('backend.category-sub.view',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   $data['rows']=SubCategory::find($id);
        $data['category']=Category::all();
        return view('backend.category-sub.edit',compact('data'));

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
        $file = $request->file('image_file');
        if ($request->hasFile("image_file")) {
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/images/subcategory'), $fileName);
            $request->request->add(['image' => $fileName]);
        }
        $data['row'] = SubCategory::find($id);
        if(!$data ['row']){
            request()->session()->flash('error','Invalid Request');
            return redirect()->route('subcategory.index');
        }
        if ($data['row']->update($request->all())) {
            $request->session()->flash('success', 'Data update Successfully');
        } else {
            $request->session()->flash('error', 'Data Update failed');

        }
        return redirect()->route('subcategory.index',compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data['row'] = SubCategory::find($id);
        if ($data['row']) {
            if ($data['row']->delete()) {
                request()->session()->flash('success', 'Data Deleted Successfully');

            } else {
                request()->session()->flash('error', 'Data Deletion failed');
            }
        } else {
            request()->session()->flash('error', 'Invalid request');
        }
        return redirect()->route('subcategory.index' );


    }
}
