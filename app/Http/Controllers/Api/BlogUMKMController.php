<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use App\Models\Dashboard;
use Image;
use Auth;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

class BlogUMKMController extends Controller
{
    public function index()
    {
        $id= Auth::user()->vendorId;
        $blogs = Blogs::where('vendorId', $id)->get();
        return response()->json($blogs, 200);

    }

    public function create()
    {
        $blogs = Blogs::all();
        return view('form-input.form-blog', ['blogs' => $blogs]);
    }

    public function store(Request $request)
    {
        $messages = [
            'contentTitle.required'    => 'Title Content is required!',
            'content.required'    => 'Content article is required!',
            'content.required'    => 'Contact is required!',
            'author.required'    => 'Author is required!',
            'contentTitle.uniqe' => 'The title content already exists!',
            'category.required' => 'Category is required!',
            'imagePath.image'    => 'Files must be in the form of images!',
            'imagePath.required'    => 'Store Image is required!',
            'imagePath.max'     => 'Image file size is too big! The maximum image size is :max!',
            'imagePath.mimes'     => 'Image files must be :mimes!'
        ];
        $this -> validate($request,[
            'imagePath' => 'required|image|mimes:jpeg,png,jpg,gif|max:5000',
            'contentTitle' => 'required|unique:blogs',
            'content' => 'required',
            'author' => 'required',
            'category' => 'required'
        ],$messages);

        $blogs = new Blogs;
        
        // $blogs->vendorId = Auth::guard('admin')->user()->vendorId;
        $blogs->vendorId = Auth::user()->vendorId;
        $blogs->contentTitle = $request->input('contentTitle');
        $blogs->content = $request->input('content');
        $blogs->author = $request->input('author');
        $blogs->category = $request->input('category');
        
        $image = request()->file('imagePath'); 
        if($image) { 
            $filenameFirst = $image->getClientOriginalName();
            $filenameUnik = pathinfo($filenameFirst, PATHINFO_FILENAME);
            $extension = $request->file('imagePath')->getClientOriginalExtension();
            $imageName = $filenameUnik . '_' . time() . '.' . $extension; 
            Image::make($request->file('imagePath'))->resize(500, 700, function ($constraint) {
                $constraint->aspectRatio();
            })->save('storage/blogs/'.$imageName);
            $blogs->imagePath = $imageName;
        } 

        $blogs->save();
        if (!$blogs){
            return response()->json("Error Saving", 500);
        } else{
            return response()->json($blogs, 201);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = array(
            'id' => "blogs",
            'blogs' => Blogs::find($id)
        );
        return view('blogs.blog-details.blog-detail')->with($data);
        // if(is_null($data)){
        //     return response()->json("not found", 404);
        // }else{
        //     return response()->json($data, 200);
        // }
    }

    public function destroy($id)
    {
        $blogs = Blogs::find($id);
        $destination = 'storage/blogs/'.$blogs->imagePath;
        File::delete($destination);
        $blogs->delete();
        if(!$blogs){
            return response()->json("Error deleting", 500);
        }else{
            return response()->json("Delete Success", 200);
        }
    }
}