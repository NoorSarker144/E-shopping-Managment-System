<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoadPageController extends Controller
{
    public function get_products(Request $request)
    {
//        return $request['max'];
        $products = DB::table('products')->whereBetween('price', [$request['min'], $request['max']])->get();
//        $products = DB::table('products')->where('price','>=',$request['min'])->where('price','<=',$request['max'])->first();
//        $products = Product::where('price','>=',$request['min'])->where('price','<=',$request['max'])->get();
        return view('loadpage.get_products',compact('products'));
    }
}
