<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
    //

    public function index(){
        $brands = Brand::all();
        $products = Product::with(['productcategory', 'brand', 'photo','tags'])->get();
        return view('shop', compact('brands', 'products'));

    }
    public function productsPerBrand($id){
        $brands = Brand::all();
        $products = Product::with(['productcategory', 'brand', 'photo','tags'])->where('brand_id', '=', $id)->get();
        return view('shop', compact('brands', 'products'));
    }
    public function addToCart($id){

        $product = Product::with(['productcategory', 'brand', 'photo','tags'])->where('id', '=', $id)->first();

        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        $cart = new Cart($oldCart);

        $cart->add($product, $id);
        Session::put('cart', $cart);
        return redirect()->back();



    }
    public function cart(){

        if(!Session::has('cart')){
            return redirect('shop');
        }else{
            $currentCart =Session::has('cart') ? Session::get('cart') : null;
            $cart = new Cart($currentCart);
            $cart = $cart->products;
            return view('checkout',compact('cart'));
        }


    }
    public function updateQuantity(Request $request){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->updateQuantity($request->id, $request->quantity);
        Session::put('cart', $cart);
        return redirect()->back();
    }
    public function removeItem($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        Session::put('cart', $cart);
        return redirect()->back();
    }
}
