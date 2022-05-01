<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Faq;
use App\Models\Product;
use App\Models\Setting;
use App\Models\SubCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use PHPUnit\Framework\Constraint\IsEmpty;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cartList()
    {
        $data['cart']=Cart::where('u_id',Auth::user()->id)->count();
        $data['cartItems'] = Cart::where('u_id',Auth::user()->id)->get();

        $data['top'] = SubCategory::orderBy('view_count', 'desc')->take(3)->get();

        $data['setting'] = Setting::find(1);
        $data['category'] = Category::all();
        $data['subcategory'] = SubCategory::all();
//        $data['sum']=Cart::sum('Products->discountedprice')

        return view('backend.cart.index', compact('data',));
    }


    public function addToCart(Request $request,$id)
    {
        $product = Product::findOrFail($id);
//        dd($request->all());


        $cart= session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]->quantity=$cart[$id]->quantity+$request->quantity;
            $cart[$id]->update();

        } else {
            $cart[$id] = Cart::create( [
                'u_id' => $request->user_id,
                'p_id' => $request->p_id,
                "name" => $product->name,
                "quantity" =>$request->quantity,
                "price" => $product->price,
                "image" => $product->image
            ]);
        }
//dd($cart[$id]);

        session()->put('cart', $cart);

        return redirect()->route('cart.list')->with('success','product added succeffully');


    }

    public function updateCart(Request $request,$id)
    {
        $row = Cart::find($id);
        if(!$row){
            Cart::create($request->all());
            return redirect()->route('cart.list');
        }
        if ($row->update($request->all())) {
            $request->session()->flash('success', 'Data update Successfully');
        } else {
            $request->session()->flash('error', 'Data Update failed');
        }
        return redirect()->route('cart.list');
    }

    public function removeCart($id)
    {
        $data['row'] = Cart::find($id);
        if ($data['row']) {
            if ($data['row']->delete()) {
                request()->session()->flash('success', 'Data Deleted Successfully');

            } else {
                request()->session()->flash('error', 'Data Deletion failed');
            }
        } else {
            request()->session()->flash('error', 'Invalid request');
        }
        return redirect()->route('cart.list' );
    }


    public function clearAllCart()
    {
        $data['clear']=Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }

}
