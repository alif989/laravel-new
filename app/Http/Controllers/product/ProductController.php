<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use DB;
class ProductController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }
    public function index()
    {

        return view('product.product_insert' );
    }
    public function store(Request $request)
    {
        $abc = $request->all();
      //  dd($abc);
        $data['created_by'] = Auth::id();
        $data['Product_name']=$request->Product_name;
        $data['Product_quantity']=$request->Product_quantity;
        $data['Product_Price']=$request->Product_Price;
        $data['product_status']=$request->product_status;
       // dd($data);
        DB::table('product')->insert($data);
        return redirect()->route('product-list')->with('success', 'Product add successfully!');
    }
    public function get_product(){

        $product = DB::table('product')
                    ->get();
        $list['list'] = $product;
        return view('product.product_list', $list);
    }
    public function get_menu(){
        $menu = DB::table('menu')
            ->where('menu_status' , '=' ,'active')
            ->get();
        $list['list'] = $menu;
       // dd($list['list']);
        return view('layouts.app', $list);
    }


}