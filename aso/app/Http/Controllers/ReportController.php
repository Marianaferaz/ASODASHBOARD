<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
    $orders = Order::paginate(10);
        // Example: group by STATUS for chart
        $statusCounts = Order::selectRaw('STATUS, COUNT(*) as total')
            ->groupBy('STATUS')
            ->pluck('total', 'STATUS');
        return view('reports.index', compact('orders', 'statusCounts'));
    }
    
        public function pdf()
    {
        $orders = Order::paginate(10);
        return view('reports.pdf', compact('orders'));
    }

}
