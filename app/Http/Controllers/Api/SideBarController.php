<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Dashboard;

class SideBarController extends Controller
{
    public function index()
    {
        $id = auth()->guard('admin')->user()->vendorId;
        $dashboard = Dashboard::where('vendorId', $id)->get();
        return view('layoutsUMKM.sidebar', compact('dashboard'));
    }

    public function index2()
    {
        $id = auth()->guard('admin')->user()->vendorId;
        $dashboard = Dashboard::where('vendorId', $id)->get();
        return view('layoutsUMKM.sidebar2', compact('dashboard'));
    }
}
