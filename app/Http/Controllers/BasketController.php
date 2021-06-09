<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class BasketController extends Controller
{
    public function basket() {
        return view('basket');
    }

    public function basketPlace() {
        return view('order');
    }
    
    public function basketAdd($productId) {
        $orderId = session('orderId');
    
        if (is_null($orderId)) {
            $order = Order::create()->id;
            session(['orderId' => $order->id]);
        } else {
            $order = Order::find($orderId);
        }
        $order->products()->attach($productId);
        dump($order->products);
        dump($order);
       
    }
}
