<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Event;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Offers;
use App\Models\Order;
use App\Models\Policy;
use App\Models\Product;
use App\Models\Services;
use App\Models\Setting;
use App\Models\SubCategory;
use App\Models\Suscriber;
use App\Models\Team;
use App\Models\Testinominal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;
use Stripe;

class FrontBaseController extends Controller
{
    public function index()
    {
        //        in every function
        $data['setting'] = Setting::find(1);
        $data['category'] = Category::all();
        $data['subcategory'] = SubCategory::all();
        $data['top'] = SubCategory::orderBy('view_count', 'desc')->take(3)->get();
//        $data['order'] = Order::where('user_id',Auth::user()->id)->get();
        //        in every function
        $data['offer'] = Offers::where('status', '1')->where('expire_date', '>', now())->get();
        $data['product'] = Product::latest()->take(4)->get();
        $data['cat'] = Category::where('slider', '1')->get();
//        dd($data['cat']);
        return view('frontend.pages.index', compact('data'));
    }
    public function single($slug)
    {
//        in every function
        $data['setting'] = Setting::find(1);
        $data['category'] = Category::all();
        $data['subcategory'] = SubCategory::all();
        $data['top'] = SubCategory::orderBy('view_count', 'desc')->take(3)->get();
//        $data['order'] = Order::where('user_id',Auth::user()->id)->get();

        //        in every function
        $data['offer'] = Offers::where('status', '1')->where('expire_date', '>', now())->get();
        $data['product'] = Product::where('slug', $slug)->first();
        $data['productall'] = Product::orderBy('sub_category_id', 'desc')->take(1)->get();
        $product = Product::orderBy('view_count', 'desc')->take('1')->pluck('category_id');
        $data['popular'] = Product::where('category_id', $product)->get();
        $data['view'] = Product::where('slug', $slug)->first();
        $data['view']->view_count = $data['view']->view_count + 1;
        $data['view']->update();

        $catId = Product::where('category_id', '!=', $product)->orderBy('view_count', 'desc')->take(1)->pluck('category_id');
        $data['popu'] = Product::where('category_id', $catId)->orderBy('view_count', 'desc')->take(4)->get();
        return view('frontend.pages.single', compact('data'));
    }
    public function subcategory($id)
    {
        // in every function
        $data['order'] = Order::where('user_id',Auth::user()->id)->get();
        $data['setting'] = Setting::find(1);
        $data['category'] = Category::all();
        $data['subcategory'] = SubCategory::all();
        $data['tops'] = SubCategory::find($id);
        $data['top'] = SubCategory::find($id);
        $data['top']->view_count = $data['top']->view_count + 1;
        $data['top']->update();
        $data['top'] = SubCategory::orderBy('view_count', 'desc')->take(3)->get();
        $sub = Product::where('sub_category_id', $id)->take(1)->pluck('sub_category_id');
        $data['sub'] = Product::where('sub_category_id', $sub)->take(8)->get();
        $data['product'] = Product::where('sub_category_id', $id)->get();
        $data['img'] = Image::all();
        $data['cat'] = Category::where('slider', '1')->take(1)->get();
        return view('frontend.pages.subcategory', compact('data'));
    }
    public function contactus()
    {
        $data['setting'] = Setting::find(1);
        $data['category'] = Category::all();
        $data['subcategory'] = SubCategory::all();
//        $data['order'] = Order::where('user_id',Auth::user()->id)->get();
        $data['top'] = SubCategory::orderBy('view_count', 'desc')->take(3)->get();
        return view('frontend.pages.contactus', compact('data'))->with('success', 'message sent');
    }
    public function event()
    {
        $data['setting'] = Setting::find(1);
        $data['category'] = Category::all();
        $data['subcategory'] = SubCategory::all();
        $data['top'] = SubCategory::orderBy('view_count', 'desc')->take(3)->get();
//        $data['order'] = Order::where('user_id',Auth::user()->id)->get();
        ////////////////////////////////////
        $data['event'] = Event::all();

        return view('frontend.pages.event', compact('data'));

    }
    public function aboutus()
    {
        $data['setting'] = Setting::find(1);
        $data['category'] = Category::all();
        $data['subcategory'] = SubCategory::all();
        $data['top'] = SubCategory::orderBy('view_count', 'desc')->take(3)->get();
//        $data['order'] = Order::where('user_id',Auth::user()->id)->get();
        ////////////////////////////////////
        $data['event'] = Event::all();
        $data['aboutus'] = AboutUs::all();
        $data['team'] = Team::take(4)->get();
        $data['testi'] = Testinominal::take(5)->get();

        return view('frontend.pages.aboutus', compact('data'));

    }
    public function services()
    {
        $data['setting'] = Setting::find(1);
        $data['category'] = Category::all();
        $data['subcategory'] = SubCategory::all();
        $data['top'] = SubCategory::orderBy('view_count', 'desc')->take(3)->get();
//        $data['order'] = Order::where('user_id',Auth::user()->id)->get();
        ////////////////////////////////////
        $data['services'] = Services::first();
        $data['followers'] = Suscriber::count();
        $data['users'] = User::count();
        return view('frontend.pages.servies', compact('data'));
    }
    public function bestdeal()
    {
        $data['setting'] = Setting::find(1);
        $data['category'] = Category::all();
        $data['subcategory'] = SubCategory::all();
        $data['top'] = SubCategory::orderBy('view_count', 'desc')->take(3)->get();
        $data['cat'] = Category::where('slider', '1')->take(2)->get();
//        $data['order'] = Order::where('user_id',Auth::user()->id)->get();
        ////////////////////////////////////
        $data['cat'] = Category::orderBy('view_count', 'asc')->get();
        $data['product'] = Product::all();
        $data['cat'] = Category::where('slider', '1')->take(1)->get();
        return view('frontend.pages.bestdeal', compact('data'));
    }
    public function product(Request $request)
    {
        // in every function
        $data['setting'] = Setting::find(1);
        $data['category'] = Category::all();
        $data['subcategory'] = SubCategory::all();
        $data['top'] = SubCategory::orderBy('view_count', 'desc')->take(3)->get();
//        $data['order'] = Order::where('user_id',Auth::user()->id)->get();
        //        in every function
        $data['cat'] = Category::where('slider', '1')->get();
        $query = $request->input('term');
        $data['searched_items'] = Product::where('name', 'like', "%$query%")
            ->orWhere('title', 'like', "%$query%")
            ->orderBy('name', 'asc')
            ->get();
        $data['product'] = Product::all();
        return view('frontend.pages.products', compact('data'));
    }
    public function faq()
    {
        // in every function
        $data['setting'] = Setting::find(1);
        $data['category'] = Category::all();
        $data['subcategory'] = SubCategory::all();
        $data['top'] = SubCategory::orderBy('view_count', 'desc')->take(3)->get();
//        $data['order'] = Order::where('user_id',Auth::user()->id)->get();
        //        in every function
        $data['FAQ'] = Faq::all();
        return view('frontend.pages.faq', compact('data'));
    }
    public function privacy()
    {
        // in every function
        $data['setting'] = Setting::find(1);
        $data['category'] = Category::all();
        $data['subcategory'] = SubCategory::all();
        $data['top'] = SubCategory::orderBy('view_count', 'desc')->take(3)->get();
//        $data['order'] = Order::where('user_id',Auth::user()->id)->get();
        //        in every function
        $data['policy'] = Policy::all();
        $data['polic'] = Policy::take(1)->get();
        return view('frontend.pages.privacy', compact('data'));
    }
    public function checkout()
    {
        $data['cart']=Cart::where('u_id',Auth::user()->id)->count();
        $data['cartItems'] = Cart::where('u_id',Auth::user()->id)->latest()->get();
        $data['setting'] = Setting::find(1);
        $data['category'] = Category::all();
        $data['subcategory'] = SubCategory::all();
        $data['top'] = SubCategory::orderBy('view_count', 'desc')->take(3)->get();
//        $data['order'] = Order::where('user_id',Auth::user()->id)->get();
        return view('frontend.pages.stripe', compact('data'));
    }
    public function afterPayment($u_id)
    {
        $data['cart']=Cart::where('u_id',Auth::user()->id)->count();
        $data['cartItems'] = Cart::where('u_id',Auth::user()->id)->latest()->get();
        $data['setting'] = Setting::find(1);
        $data['category'] = Category::all();
        $data['subcategory'] = SubCategory::all();
        $data['order'] = Order::where('user_id',Auth::user()->id)->get();
        $data['top'] = SubCategory::orderBy('view_count', 'desc')->take(3)->get();
        \Stripe\Stripe::setApiKey('sk_test_51KskKCCKCZPmbAvmbzEdtZSvN7zoPXWX4GRu0GOJjHJtVb6lhQmzexdEPRq0cd1JujHtl5RC9vUd9vGXORW82fYf00YSL1fSnv');
        $total = 0 ;
        foreach ($data['cartItems'] as $carts){
            $total += $carts->quantity * $carts->Products->discountedprice;
        }
        $amount = (int)$total;
        $payment_intent = \Stripe\PaymentIntent::create([
            'amount' => $amount,
            'currency' => 'usd',
            'description' => 'Payment From All About Laravel',
            'payment_method_types' => ['card'],
        ]);
        $intent = $payment_intent->client_secret;
        foreach ($data['cartItems'] as $carts) {
            Order::create([
                'user_id' =>$carts->u_id,
            'product_id' => $carts->p_id,
            "quantity" => $carts->quantity,
            'amount' =>$carts->p_id,


        ]);
        }
         $data['all']=Cart::where('u_id',$u_id)->delete();



        return view('frontend.pages.order',compact('data', 'intent'))->with('success','order sus');
    }
    public function clearAllCart($u_id)
    {
//        dd($u_id);
        Cart::where('u_id',$u_id)->delete();
        return redirect()->route('cart.list' );
    }
    public function Order(){
        $data['cart']=Cart::where('u_id',Auth::user()->id)->count();
        $data['cartItems'] = Cart::where('u_id',Auth::user()->id)->latest()->get();
        $data['setting'] = Setting::find(1);
        $data['category'] = Category::all();
        $data['subcategory'] = SubCategory::all();
        $data['top'] = SubCategory::orderBy('view_count', 'desc')->take(3)->get();
        $data['order'] = Order::where('user_id',Auth::user()->id)->get();

        return view('frontend.pages.order',compact('data'));

}


}

