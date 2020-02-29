<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Product;
use Auth;

class CartController extends Controller
{
    
    public function index()
    {
        $cart=Cart::where('user_id',Auth::user()->user_id)->get();
        // dd($cart);
        return view('user.cart',compact('cart'));
    }

    public function addItem($id)
    {
        
        $usr=Auth::user();
        $cart=Cart::where('user_id',$usr->user_id)->where('product_id',$id)->get();
        if(sizeof($cart))
        {
            $qty=$cart[0]->quantity;
            Cart::where('user_id',$usr->user_id)->where('product_id',$id)->update(['quantity'=>$qty+1]);
        }
        else{
            $cart=new Cart;
            $cart->user_id=$usr->user_id;
            $prd=Product::find($id);
            $cart->product_id=$prd->product_id;
            $cart->quantity=1;
            $cart->save();
        }
        return redirect()->back()->with('status','Successfully added to cart!');
        // dd($cart);
    }

    public function subtractItem($id)
    {
        $usr=Auth::user();
        $cart=Cart::where('user_id',$usr->user_id)->where('product_id',$id)->get();
        $qty=$cart[0]->quantity;
        if($qty==1)
        {
            Cart::where('user_id',$usr->user_id)->where('product_id',$id)->delete();
            return redirect()->back();
        }
        Cart::where('user_id',$usr->user_id)->where('product_id',$id)->update(['quantity'=>$qty-1]);
        return redirect()->back();
    }

    public function checkOut()
    {
        $cart=Auth::user()->Cart()->get();

        return view('user.payment',compact('cart'));
    }

    public function cancelItem($id)
    {
        Cart::where('user_id',Auth::user()->user_id)->where('product_id',$id)->delete();
        return redirect()->back();
    }

    public function order(Request $req)
    {
        dd(Auth::user());
    }

    public function addCourier($id)
    {

    }

    public function addBank($id)
    {
        
    }
}
