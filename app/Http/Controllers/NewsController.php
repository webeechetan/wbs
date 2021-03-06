<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = Blog::where('type','2')->get();
        return view('admin.news.list',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.add');
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
            'title' => 'required',
        ]);
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->short_description = $request->short_description;
        $blog->slug = $request->slug;
        $blog->url = $request->url;
        $blog->type = 2;
        if($request->publish_at){
            $blog->publish_at = $request->publish_at;
        }
        $blog->save();
        if($blog->id){
            return redirect()->route('news.list')->with('success','New News Created');
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
        return view('blog-inner',compact('blog','related_blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = Blog::find($id);
        return view('admin.news.edit',compact('news'));
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
        $blog->title = $request->title;
        $blog->short_description = $request->short_description;
        $blog->slug = $request->slug;
        $blog->url = $request->url;
        if($request->publish_at){
            $blog->publish_at = $request->publish_at;
        }
        if($blog->save()){
            return redirect()->route('news.list')->with('success','News Updated');
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
        return view('blog',compact('blogs'));
    }
}
