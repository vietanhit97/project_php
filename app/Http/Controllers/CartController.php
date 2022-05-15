<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function add($id, $quantity = 1)
    {
        $carts = session('cart')  ? session('cart') : [];
        if (isset($carts[$id]) ) {
            $carts[$id]->quantity += $quantity;
        }
        else {
            $pro = Product::find($id);
            $item = new \stdClass();
            $item->id = $pro->id;
            $item->name = $pro->name;
            $item->image = $pro->image;
            $item->price = $pro->sale_price > 0 ? $pro->sale_price : $pro->price;
            $item->quantity = $quantity;
            $carts[$id] = $item;
        }
        session(['cart' => $carts]);
        return redirect()->route('cart.view');
    }

    public function update($id)
    {
        $quantity = request('quantity',1);
        $carts = session('cart')  ? session('cart') : [];
        if (isset($carts[$id]) ) {
            $carts[$id]->quantity = $quantity;
            session(['cart' => $carts]);
        }

        return redirect()->route('cart.view');
    }

    public function delete($id)
    {
        $carts = session('cart')  ? session('cart') : [];
        if (isset($carts[$id]) ) {
            unset($carts[$id]);
            session(['cart' => $carts]);
        }

        return redirect()->route('cart.view');
    }
    public function clear()
    {
        session(['cart' => null]);
        return redirect()->route('cart.view');
    }

    public function view()
    {
        $carts = session('cart')  ? session('cart') : [];
        return view('cart.view', compact('carts'));
    }
}
