<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\Offers;
use App\Models\Policy;
use App\Models\Product;
use App\Models\Setting;
use App\Models\SubCategory;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['rows'] = Product::all();
        return view('backend.product.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['category'] = Category::all();
        $data['subcategory'] = SubCategory::all();
        return view('backend.product.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'discountedprice' => 'required',
        ]);

        $file = $request->file('image_files');
        if ($request->hasFile("image_files")) {
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/images/featureimage'), $fileName);
            $request->request->add(['feature_image' => $fileName]);
        }
       $row=Product::create($request->all());

        $str['product_id']=$row->id;
        $img = $request->file('image_file');
        for ($i=0;$i<count($img);$i++){
            $file =$img[$i];
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/images/product'), $fileName);
            $request->request->add(['image'=>$fileName]);
            $str['image']= $fileName;
            Image::create($str);


        }



        return redirect()->route('product.index');
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $data['row']=Product::find($id);
       return view('backend.product.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['row']=Product::find($id);

        $data['category'] = Category::all();
        $data['subcategory'] = SubCategory::all();
        return view('backend.product.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data['row'] = Product::find($id);
        if(!$data ['row']){
            request()->session()->flash('error','Invalid Request');
            return redirect()->route('product.index');
        }
        if ($data['row']->update($request->all())) {
            $request->session()->flash('success', 'update Successfully');
        } else {
            $request->session()->flash('error', ' Update failed');
        }
        return redirect()->route('product.index')->with('success','update Successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data['row'] = Product::find($id);
        if ($data['row']) {
            if ($data['row']->delete()) {
                request()->session()->flash('success', 'Data Deleted Successfully');

            } else {
                request()->session()->flash('error', 'Data Deletion failed');
            }
        } else {
            request()->session()->flash('error', 'Invalid request');
        }
        return redirect()->route('product.index' );



    }

    public function GetSubCatAgainstMainCatEdit($id)
    {

        echo json_encode(DB::table('subcategory')->where('category_id', $id)->get());

    }
    public function GetSubCat($id)
    {

        echo json_encode(DB::table('subcategory')->where('category_id', $id)->get());


    }
    public function GetSubCatAgainstMainCatEdit1($id)
    {

        echo json_encode(DB::table('subcategory')->where('category_id', $id)->get());

    }
    public function GetSubCat1($id)
    {

        echo json_encode(DB::table('subcategory')->where('category_id', $id)->get());

    }

}

