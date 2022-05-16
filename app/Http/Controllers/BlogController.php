<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Category;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blog.list',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.blog.add',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:6',
            'description' => 'required|min:25',
            'category' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'thumbnail' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
            'banner' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
        ]);
        $thumbnail = time().rand(1,50).'.'.$request->file('thumbnail')->extension();
        $request->file('thumbnail')->move(public_path('images'),$thumbnail);
        $banner = time().rand(1,50).'.'.$request->file('banner')->extension();
        $request->file('banner')->move(public_path('images'),$banner);
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->cat_id = $request->category;
        $blog->thumbnail = $thumbnail;
        $blog->banner = $banner;
        $blog->meta_title = $request->meta_title;
        $blog->meta_description = $request->meta_description;
        $blog->save();
        if($blog->id){
            return redirect()->route('blog.list')->with('success','New Blog Created');
        }
        return back()->with('failed','Something Went Wrong');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        $categories = Category::all();
        return view('admin.blog.edit',compact('blog','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $request->validate([
            'title' => 'required|min:6',
            'description' => 'required|min:25',
            'category' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'thumbnail' => 'mimes:jpeg,jpg,png,gif|max:10000',
            'banner' => 'mimes:jpeg,jpg,png,gif|max:10000',
        ]);

        $blog = Blog::find($request->id);
        if($request->hasFile('thumbnail')){
            $thumbnail = time().rand(1,50).'.'.$request->file('thumbnail')->extension();
            $request->file('thumbnail')->move(public_path('images'),$thumbnail);
            $blog->thumbnail = $thumbnail;
        }
        if($request->hasFile('banner')){
            $banner = time().rand(1,50).'.'.$request->file('banner')->extension();
            $request->file('banner')->move(public_path('images'),$banner);
            $blog->banner = $banner;
        }
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->cat_id = $request->category;
        $blog->meta_description = $request->meta_description;
        $blog->meta_title = $request->meta_title;

        if($blog->save()){
            return redirect()->route('blog.list')->with('success','Blog Updated');
        }
        return back()->with('failed','Something Went Wrong');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Blog::where('id', $id)->delete()){
            return redirect()->route('blog.list')->with('success','Blog Deleted');
        }   
        return redirect()->route('blog.list')->with('failed','Something Went Wrong');
    }

    public function front_end_view(){
        $blogs = Blog::all();
        $categories = Category::all();
        return view('blog',compact('blogs','categories'));
    }
}
