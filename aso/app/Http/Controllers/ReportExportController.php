<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ReportExportController extends Controller
{
    public function pdf()
    {
        $orders = Order::all();
        $pdf = Pdf::loadView('reports.pdf_export', compact('orders'));
        return $pdf->download('laporan_orders.pdf');
    }
}
