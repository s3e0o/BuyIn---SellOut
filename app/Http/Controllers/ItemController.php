<?php

namespace App\Http\Controllers;
use App\Models\Item;
use Illuminate\Http\Request;


class ItemController extends Controller
{
    public function index() {
        $items = Item::all();
        return view ('home', compact('items'));
    }
    public function itemCart(){
        return view ('cart');
    }

    public function addItemtoCart($id){
        $item = Item::findOrFail($id);
        $cart = session()->get('cart', []);
        if (isset($cart[$id])){
            $cart[$id]['quantity']++;
        }
        else{
            $cart[$id] = [
                'name' => $item->name,
                'quantity' => 1,
                'price' => $item->price,
                'image' => $item->image
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Item has been added to cart!');
    }
    
    public function updateCart(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Item added to cart.');
        }
    }

    public function deleteProduct(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Item successfully deleted.');
        }
    }


}
