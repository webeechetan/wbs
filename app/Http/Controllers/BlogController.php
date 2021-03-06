<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use PhpParser\Node\Expr\AssignOp\Mod;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::where('type','1')->get();
        return view('admin.blog.list',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('type','1')->get();
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
            'title' => 'required'
        ]);
        
        $blog = new Blog();
        if(!$request->category_id){
            $blog->cat_id = "1,";
        }else{
            $blog->cat_id = implode(',',$request->category_id,);
        }
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->short_description = $request->short_description;
        $blog->slug = $request->slug;
        $blog->thumbnail = $request->thumbnail;
        $blog->banner = $request->banner;
        $blog->og_image = $request->og_image;
        $blog->og_title = $request->og_title;
        $blog->meta_title = $request->meta_title;
        $blog->meta_description = $request->meta_description;
        $blog->type = 1;
        if($request->publish_at){
            $blog->publish_at = $request->publish_at;
        }
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
    public function show($slug)
    {
        
        $blog = Blog::where('slug',$slug)->first();
        if(!$blog){
            abort(404);
        }
        $related_blog = Blog::where('type', $blog->type)->take(5)->get();
        $array = ['title'=>$blog->meta_title, 'meta_description'=>$blog->meta_description,'og_title'=>$blog->og_title,'og_image'=>$blog->og_image];
        $meta = (object) $array;
        return view('blog-inner',compact('blog','related_blog','meta'));
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
        $categories = Category::where('type','1')->get();
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
            'title' => 'required',
        ]);

        $blog = Blog::find($request->id);
        $blog->thumbnail = $request->thumbnail;
        $blog->banner = $request->banner;
        if(!$request->category_id){
            $blog->cat_id = "1,";
        }else{
            $blog->cat_id = implode(',',$request->category_id,);
        }
        $blog->og_image = $request->og_image;
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->meta_description = $request->meta_description;
        $blog->meta_title = $request->meta_title;
        $blog->short_description = $request->short_description;
        $blog->slug = $request->slug;
        $blog->og_title = $request->og_title;
        if($request->publish_at){
            $blog->publish_at = $request->publish_at;
        }
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
}
