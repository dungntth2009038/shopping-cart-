<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use stdClass;


class ShoppingCartController extends Controller
{
    public function add(Request $request)
    {
        $productId = $request->get('productId');
        $productQuantity = $request->get('productQuantity');
        $action = $request->get('cartAction');
        $product = Product::find($productId);
        if ($product == null) {
            return '404';
        }
        $shoppingCart = null;
        if (Session::has('shoppingCart')) {
            $shoppingCart = Session::get('shoppingCart');
        } else {
            $shoppingCart = [];
        }
        $cartItem = null;
        $message = 'Them san pham vao gio hang thanh cong';
        if (!array_key_exists($productId, $shoppingCart)) {
            $cartItem = new stdClass();
            $cartItem->id = $product->id;
            $cartItem->name = $product->name;
            $cartItem->thumbnail = $product->thumbnail;
            $cartItem->untiPrice = $product->price;
            $cartItem->quantity = intval($productQuantity);
        } else {
            $cartItem = $shoppingCart[$productId];
            if ($action != null && $action == 'update') {
                $cartItem->quantity = $productQuantity;
                $message = 'update san pham thanh cong';
            } else {
                $cartItem->quantity += $productQuantity;

            }
        }
        $shoppingCart[$productId] = $cartItem;
        Session::put('shoppingCart', $shoppingCart);
        return redirect('/show')->with('message', $message);
    }

    public function show()
    {
        $shoppingCart = Session::get('shoppingCart');
        return view('cart', [
            'shoppingCart' => $shoppingCart
        ]);
    }

    public function remove(Request $request)
    {
        $productId = $request->get('productId');
        $shoppingCart = null;
        if (Session::has('shoppingCart')){
            $shoppingCart = Session::get('shoppingCart');
            unset($shoppingCart[$productId]);
            Session::put('shoppingCart', $shoppingCart);
            return redirect('/show')->with('remove', 'Xoa san pham khoi gio hang thanh cong!');
        }

    }
}
