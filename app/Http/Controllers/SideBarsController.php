<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;

class SideBarsController extends Controller
{
    public function index()
    {
        $id = auth()->guard('admin')->user()->vendorId;
        $dashboard = Dashboard::where('vendorId', $id)->get();
        return view('layoutsUMKM.sidebar', compact('dashboard'));
    }
<<<<<<< HEAD:app/Http/Controllers/SideBarsController.php

    public function index2()
    {
        $id = auth()->guard('admin')->user()->vendorId;
        $dashboard = Dashboard::where('vendorId', $id)->get();
        return view('layoutsUMKM.sidebar2', compact('dashboard'));
    }
=======
<<<<<<< HEAD
>>>>>>> 6875360cd66618fd3f8a84256dac67dbd96c98be:app/Http/Controllers/SideBarController.php
}
=======
}
>>>>>>> ca60b13a77d2250c8df34dac0d607288e2eec176
