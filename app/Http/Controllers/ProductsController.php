<?php

namespace App\Http\Controllers;

use App\Product;
use App\Productcat;
use App\Seller;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class ProductsController extends Controller
{
    public function index(){
        $products=Product::paginate(10);
        // $products = DB::table('products')
        // ->join('productcats', 'productcats.category_id', '=', 'products.cat_id')
        // ->join('sellers', 'sellers.seller_id', '=', 'products.seller_id')
        // ->paginate(10, array(
        //     'products.product_id', 'products.product_name', 'sellers.seller_name', 
        //     'productcats.category_name', 'products.price', 'products.stock', 'products.description', 'products.filename'
        // ));

        return view('home', compact('products'));
    }

    public function showProduct(Product $product){
        $seller = $product->Seller()->get();        
        $product->seller_id = $seller[0]->seller_name;
        $category = $product->Productcat()->get();
        $product->cat_id = $category[0]->category_name;
        return view('products.details', compact('product'));
    }

    public function search(Request $request){
        $search = $request->get('search');
        $product = DB::table('products')
        ->where('product_name', 'like', '%'.$search.'%')
        ->orWhere('category_name', 'like', '%'.$search.'%')
        ->orWhere('seller_name', 'like', '%'.$search.'%')
        ->join('productcats', 'category_id', '=', 'products.cat_id')
        ->join('sellers', 'sellers.seller_id', '=', 'products.seller_id')
        ->paginate(30, array(
            'products.product_id', 'products.product_name', 'productcats.category_name', 'sellers.seller_name', 'products.price',
            'products.stock', 'products.rating','products.filename'
        ));

        return view('products.browse', compact('product', 'search'));
    }

    public function category($id)
    {
        $cat=Productcat::find($id);
        $products=$cat->Product()->paginate(10);
        
        return view('home', compact('products'));
    }
}
