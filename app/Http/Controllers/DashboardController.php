<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class DashboardController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('dashboard.index', compact('customers'));
    }
}
