<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderHistoryController extends Controller
{
    public function index()
    {
        $orders = Order::onlyTrashed()->orderByDesc('deleted_at')->paginate(20);
        return view('orders.history', compact('orders'));
    }

    public function restore($id)
    {
        $order = Order::onlyTrashed()->findOrFail($id);
        $order->restore();
        return redirect()->route('orders.history')->with('status', 'Order restored successfully!');
    }

    public function forceDelete($id)
    {
        $order = Order::onlyTrashed()->findOrFail($id);
        $order->forceDelete();
        return redirect()->route('orders.history')->with('status', 'Order permanently deleted!');
    }
}
