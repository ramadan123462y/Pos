<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Order;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class DashboardController extends Controller
{
    public function index()
    {


        $invoices_paid = invoice::where('Value_Status', 2)->count();
        $orders=Order::count();




        return view('welcome', compact('orders'));
    }
}
