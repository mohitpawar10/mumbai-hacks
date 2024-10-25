<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $campaigns = auth()->user()->campaigns;

        return view('dashboard', compact('campaigns'));
    }
}
