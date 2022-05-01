<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Offers;
use App\Models\Product;
use App\Models\Setting;
use App\Models\SubCategory;
use App\Models\Suscriber;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
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
    public function index()
    {

        $data['offer'] = Offers::where('status', '1')->where('expire_date', '>', now())->get();
        $data['product'] = Product::latest()->take(4)->get();
        $data['top'] = Product::orderBy('view_count', 'desc')->take(3)->get();
        $data['setting'] = Setting::find(1);
        $data['category'] = Category::all();
        $data['subcategory'] = SubCategory::all();

//        dd($data);

        return view('frontend.pages.index',compact('data'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $data['user']=User::count();
//        dd($data['user']);
        $data['admin']=User::where('is_admin','1')->count();
        $data['suscribers']=Suscriber::count();
        $data['sub']=SubCategory::count();
        $data['cat']=Category::count();
        $data['pro']=Product::count();
               return view('adminHome',compact('data'));


    }

    public function dashboard()
    {


    }
    public function user()
    {
        $data['user'] = User::all();
        return view('backend.user.index',compact('data'));

    }
    public function changeStatususer(Request $request)
    {
        $users = User::find($request->id);
        $users->is_admin = $request->is_admin;
        $users->save();

        return response()->json(['success'=>'Status change successfully.']);
    }

}
