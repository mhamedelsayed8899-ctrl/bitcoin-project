<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Message;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    public function index(){


        $products = Product::with('cat' , 'image')->paginate(4) ;
        return view('shop.pages.index' , compact('products')) ;

    }

    public function products(Request $request){
        if($request->method() == "GET"){

            $products = Product::with('cat' , 'image')->get() ;


            }elseif($request->method() == "POST"){

            $search = $request->search ;

               $products = Product::where("name" , "like" , " %$search%")->with('cat' , 'image')->get() ;

                }

                return view('shop.pages.products' , compact('products')) ;


    }

    public function product_details($id){

        $products = Product::with('cat' , 'image')->find($id) ;

        return view('shop.pages.details' , compact('products')) ;

    }

    public function contact(){


        return view('shop.pages.contact') ;

    }

    public function store_ms(Request $request){

        $message = $request->except('_token') ;
        Message::create($message) ;

    }

    public function add_to_cart(Request $request){

        $product_id = $request->product_id ;
        $user_id = Auth::guard('web')->user()->id ;
     $cart =   Cart::where('user_id' , $user_id)->where('product_id' , $product_id)->first() ;


        if($cart){

        $cart->increment('count') ;
        return "Updated";


        }else{

            Cart::create([

            "user_id" => $user_id ,
            "product_id" => $product_id ,
            "count" => 1 ,
            ]) ;

            return "inserted";

        }


    }
}
