<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.dashboard');
    }
}
