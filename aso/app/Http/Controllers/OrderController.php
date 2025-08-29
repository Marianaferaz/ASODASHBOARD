<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $query = Order::query();
        if ($request->filled('q')) {
            $q = $request->q;
            $query->where(function($sub) use ($q) {
                $sub->where('ID_NUMBER', 'like', "%$q%")
                    ->orWhere('CUSTOMER_NAME', 'like', "%$q%")
                    ->orWhere('STATUS', 'like', "%$q%")
                    ->orWhere('PACKAGE_NAME', 'like', "%$q%")
                    ->orWhere('NO_HP', 'like', "%$q%")
                    ->orWhere('SCORDERNO', 'like', "%$q%")
                    ->orWhere('CUSTOMER_ADDRESS', 'like', "%$q%")
                    ->orWhere('ORDERTYPE', 'like', "%$q%")
                    ->orWhere('REGIONAL_BARU', 'like', "%$q%")
                    ->orWhere('DISTRICT_BARU', 'like', "%$q%")
                    ->orWhere('DATEL_BARU', 'like', "%$q%")
                    ->orWhere('STO', 'like', "%$q%")
                    ->orWhere('REGIONAL_LAMA', 'like', "%$q%")
                    ->orWhere('DISTRICT_LAMA', 'like', "%$q%")
                    ->orWhere('DATEL_LAMA', 'like', "%$q%")
                    ->orWhere('AMCREW', 'like', "%$q%")
                    ->orWhere('CHIEF_NAME', 'like', "%$q%")
                    ->orWhere('ERRORCODE', 'like', "%$q%")
                    ->orWhere('SUBERRORCODE', 'like', "%$q%")
                    ->orWhere('ENGINEERMEMO', 'like', "%$q%")
                    ->orWhere('OWNERGROUP', 'like', "%$q%")
                    ->orWhere('CATATAN_TEKNISI', 'like', "%$q%")
                    ->orWhere('PRODUCT', 'like', "%$q%")
                    ->orWhere('TERRITORY_TIF', 'like', "%$q%")
                    ->orWhere('DISTRICT_TIF', 'like', "%$q%")
                ;
            });
        }
        $orders = $query->latest()->paginate(20)->appends($request->only('q'));
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'ID_NUMBER' => 'required',
            'CUSTOMER_NAME' => 'required',
            // tambahkan validasi lain sesuai kebutuhan
        ]);
        Order::create($request->all());
        return redirect()->route('orders.index')->with('status', 'Order created successfully!');
    }

    public function edit(Order $order)
    {
        return view('orders.edit', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        $validated = $request->validate([
            'ID_NUMBER' => 'required',
            'CUSTOMER_NAME' => 'required',
            // tambahkan validasi lain sesuai kebutuhan
        ]);
        $order->update($request->all());
        return redirect()->route('orders.index')->with('status', 'Order updated successfully!');
    }

    public function destroy(Order $order)
    {
        $order->delete(); // soft delete
        return redirect()->route('orders.index')->with('status', 'Order moved to history!');
    }
}
