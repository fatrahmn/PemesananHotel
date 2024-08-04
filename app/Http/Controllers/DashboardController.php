<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function adminDashboard(): View
    {
        if (auth()->user()->level != 'Admin') {
            abort(404);
        }
        return view('levelAdmin.dashboard');
    }

    public function customerDashboard(): View
    {
        if (auth()->user()->level != 'Customer') {
            abort(404);
        }
        return view('levelCustomer.dashboard');
    }
}
