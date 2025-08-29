<?php
namespace App\Http\Controllers;
use App\Models\Order;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Ambil data ORDERTYPE = 'create' dan group by DATEL_BARU
        $chartData = Order::where('ORDERTYPE', 'create')
            ->selectRaw('DATEL_BARU, COUNT(*) as total')
            ->groupBy('DATEL_BARU')
            ->orderBy('DATEL_BARU')
            ->pluck('total', 'DATEL_BARU');
        return view('home', [
            'chartLabels' => $chartData->keys(),
            'chartValues' => $chartData->values(),
        ]);
    }
}
