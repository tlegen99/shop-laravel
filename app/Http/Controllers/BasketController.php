<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function basket()
    {
        $order_id = session('order_id');
        
        if (!is_null($order_id)) {
            $order = Order::findOrFail($order_id);
        }
        
        return view('basket', ['order' => $order]);
    }
    
    public function order()
    {
        return view('order');
    }
    
    public function basketAdd($product_id)
    {
        $order_id = session('order_id');
        
        if (is_null($order_id)) {
            $order = Order::create()->id;

            session(['order_id' => $order]);
        } else {
            $order = Order::find($order_id);
        }
        
        if ($order->products->contains($product_id)) {
            $pivot_row = $order->products()->where('product_id', $product_id)->first()->pivot;
            $pivot_row->count++;
            $pivot_row->update();
        } else {
            $order->products()->attach($product_id);
        }
        
        return redirect()->route('basket');
    }
    
    public function basketRemove($product_id)
    {
        $order_id = session('order_id');
        $order = Order::find($order_id);
        
        if (is_null($order_id)) {
            return redirect()->route('basket');
        }
        
        if ($order->products->contains($product_id)) {
            $pivot_row = $order->products()->where('product_id', $product_id)->first()->pivot;
            if ($pivot_row->count < 2) {
                $order->products()->detach($product_id);
            } else {
                $pivot_row->count--;
                $pivot_row->update();
            }
        }
        
        return redirect()->route('basket');
    }
}
