<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Codecourse\Notify\Facades\Notify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{
    public function getIndex()
    {
        $productsone = DB::table('products')->limit(4)->get();
        $productstwo = DB::table('products')->offset(4)->limit(4)->get();
        return view('homepage',compact('productsone','productstwo'));
    }

    public function getAllProduct()
    {
        $products = DB::table('products')->get();
        return view('products',compact('products'));
    }

    public function getAddToCart(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCard = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCard);
        $cart->add($product, $product->id);
        $request->session()->put('cart', $cart);
        return redirect()->back();
    }

    public function getShoppingcart()
    {
        if(!Session::has('cart')) {
            $products = null;
            return view('shoppingcart',compact('products'));
        }
        $oldCart = Session::has('cart') ? Session::get('cart') : '';
        $cart = new Cart($oldCart);
        $products = $cart->items;
        $totalPrice = $cart->totalPrice;
        $totalQty = $cart->totalQty;
        return view('shoppingcart',compact('products','totalPrice','totalQty'));
    }

    public function getReduce($id)
    {
        if(!Session::has('cart')) {
            $products = null;
            return view('shoppingcart',compact('products'));
        }
        $oldCart = Session::has('cart') ? Session::get('cart') : '';
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);
        Session::put('cart',$cart);
        return redirect()->back();
    }

    public function getClearCart()
    {
        if(Session::has('cart')) {
            Session::forget('cart');
            return redirect('/');
        }
    }



    public function getRemove($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : '';
        $cart = new Cart($oldCart);
        $cart->remove($id);
        Session::put('cart',$cart);
        return redirect()->back();
    }

    public function getCheckOut()
    {
        return view('checkout');
    }

    public function storeOrder(Request $request)
    {
        $oldcart = Session::has('cart') ? Session::get('cart') : '';
        $cart = new Cart($oldcart);
        $request['cart'] = serialize($cart);
        if(Auth::user()->orders()->create($request->all())) {
            notify()->flash('Order Stored Successfully.', 'success');
            Session::forget('cart');
            return redirect()->back();
        }

    }

}
