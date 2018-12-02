<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FoodsController extends Controller
{
    public function index()
    {
        $items = Food::all();

        return view('items.items', [
            'items' => $items
        ]);
    }

    public function detail($id)
    {
        return view('items.detail', [
            'id' => $id,
        ]);
    }

    public function cart()
    {
        return view('items.cart');
    }

    public function add(Request $request)
    {
        // TODO: 手抜き実装です。許してください。
//        $item = $request->item;
//        $carts = User::select('carts')->where('id', Auth::id())->first()->carts;
//        $carts .= $item . ',';
//        User::where('id', Auth::id())->update([
//            'carts' => $carts
//        ]);
//        return redirect('/items');
    }
}
