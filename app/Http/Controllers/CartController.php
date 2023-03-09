<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function getCart () {
        $cart = cart::where('user_id','=',session('user')->id)->get();
        return view('cart', compact('cart'));
    }

    public function addToCart (product $product){
        $data = $product->attributesToArray();
        $data['user_id'] = session('user')->id ; 
        unset($data['updated_at']);
        unset($data['created_at']);
        cart::create($data);
        return to_route('homePage') ;
    }
}
