<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use App\Models\Dashboard;
use App\Models\Product;
use Illuminate\Http\Request;
use Image;
use Auth;
use Illuminate\Support\Facades\File;



class DashboardUMKMsController extends Controller
{
    public function index()
    {
        $id = auth()->guard('admin')->user()->vendorId;
        $dashboard = Dashboard::where('vendorId', $id)->get();
        $jumlahProduk = Product::where('vendorId', $id)->count();
        $jumlahBlog = Blogs::where('vendorId', $id)->count();
        return view('pemilikUMKM.dashboard', compact('dashboard', 'jumlahProduk', 'jumlahBlog'));
    }

    public function store(Request $request)
    {
        $messages = [
            'imagePath.image'    => 'Files must be in the form of images!',
            'imagePath.required'    => 'Store Image is required!',
            'imagePath.max'     => 'Image file size is too big! The maximum image size is :max!',
            'imagePath.mimes'     => 'Image files must be :mimes!',
            'storeName.required'    => 'Store Name is required!',
            'storeName.uniqe' => 'The store name already exists!',
            'address.required'    => 'Address Store is required!',
            'category.required'    => 'Category Store is required!',
            'wa.required'    => 'WhatsApp number is required!',
            'desc.required'    => 'Description Store is required!'
        ];
        $this -> validate($request,[
            'imagePath' => 'required|image|mimes:jpg,png,jpeg|max:5000',
            'storeName' => 'required|unique:dashboards|min:5|max:20',
            'address' => 'required',
            'category' => 'required',
            'wa' => 'required',
            'desc' => 'required',
        ],$messages);

        $dashboard = new Dashboard;
        $dashboard->vendorId = Auth::user()->vendorId;
        $dashboard->storeName = $request->input('storeName');
        $dashboard->address = $request->input('address');
        $dashboard->category = $request->input('category');
        $dashboard->wa = $request->input('wa');
        $dashboard->ig = $request->input('ig');
        $dashboard->shopee = $request->input('shopee');
        $dashboard->others = $request->input('others');
        $dashboard->desc = $request->input('desc');

        $image = request()->file('imagePath'); 
        if($image) { 
            $filenameFirst = $image->getClientOriginalName();
            $filenameUnik = pathinfo($filenameFirst, PATHINFO_FILENAME);
            $extension = $request->file('imagePath')->getClientOriginalExtension();
            $imageName = $filenameUnik . '_' . time() . '.' . $extension; 
            Image::make($request->file('imagePath'))->resize(500, 500, function ($constraint) {
                $constraint->aspectRatio();
            })->save('storage/dashboard/'.$imageName);
            $dashboard->imagePath = $imageName;
        } 

        $dashboard->save();
        return redirect('/myStore')->with(['success' => 'Store Detail created successfully!']);
    }

    public function show($id)
    {
        $data = array(
            'id' => "dashboard",
            'dashboard' => Dashboard::find($id)
        );
        return view('pemilikUMKM.my-store')->with($data);
    }

    public function edit($id)
    {
        $data = array(
            'id' => "dashboard",
            'dashboard' => Dashboard::find($id)
        );
        return view('form-input.form-store-detail-update')->with($data);
    }

    public function update(Request $request, $id)
    {
        $messages = [
            'imagePath.image'    => 'Files must be in the form of images!',
            'imagePath.required'    => 'Store Image is required!',
            'imagePath.max'     => 'Image file size is too big! The maximum image size is :max!',
            'imagePath.mimes'     => 'Image files must be :mimes!',
            'storeName.required'    => 'Store Name is required!',
            'storeName.uniqe' => 'The store name already exists!',
            'address.required'    => 'Address Store is required!',
            'category.required'    => 'Category Store is required!',
            'wa.required'    => 'WhatsApp number is required!',
            'desc.required'    => 'Description Store is required!'
        ];
        $this -> validate($request,[
            'imagePath' => 'image|mimes:jpg,png,jpeg|max:5000',
            'storeName' => 'required|min:5|max:20',
            'address' => 'required',
            'category' => 'required',
            'wa' => 'required',
            'desc' => 'required',
        ],$messages);

        $dashboard = Dashboard::find($id);
        $dashboard->vendorId = Auth::guard('admin')->user()->vendorId;
        $dashboard->storeName = $request->input('storeName');
        $dashboard->address = $request->input('address');
        $dashboard->category = $request->input('category');
        $dashboard->wa = $request->input('wa');
        $dashboard->ig = $request->input('ig');
        $dashboard->shopee = $request->input('shopee');
        $dashboard->others = $request->input('others');
        $dashboard->desc = $request->input('desc');

        $image = request()->file('imagePath'); 
        if($request->hasfile('imagePath')) { 
            $destination = 'storage/dashboard/'.$dashboard->imagePath;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            if($image){
                $filenameFirst = $image->getClientOriginalName();
                $filenameUnik = pathinfo($filenameFirst, PATHINFO_FILENAME);
                $extension = $request->file('imagePath')->getClientOriginalExtension();
                $imageName = $filenameUnik . '_' . time() . '.' . $extension; 
                Image::make($request->file('imagePath'))->resize(500, 500, function ($constraint) {
                    $constraint->aspectRatio();
                })->save('storage/dashboard/'.$imageName);
                $dashboard->imagePath = $imageName;
            }
        } 
<<<<<<< HEAD:app/Http/Controllers/DashboardUMKMsController.php
        $dashboard->update();
        return redirect('/myStore')->with(['success' => 'Store Detail updated successfully!']);
=======

        $dashboard->update();
        return redirect('/myStore')->with(['success' => 'Store Detail update successfully!']);
>>>>>>> 6875360cd66618fd3f8a84256dac67dbd96c98be:app/Http/Controllers/DashboardUMKMController.php
    }
}
