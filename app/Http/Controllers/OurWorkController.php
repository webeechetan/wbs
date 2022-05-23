<?php

namespace App\Http\Controllers;

use App\Models\OurWork;
use Illuminate\Http\Request;
use App\Models\Category;

class OurWorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ourWork = OurWork::all();
        return view('admin.our-works.list',compact('ourWork'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.our-works.add1',compact('categories'));
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
            'name' => 'required',
            'image' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'category_id' => 'required',
            'short_description' => 'required'
        ]);
        $image = time().rand(1,50).'.'.$request->file('image')->extension();
        $request->file('image')->move(public_path('images'),$image);

        $ourWork = new OurWork();
        $ourWork->name = $request->name;
        $ourWork->description = json_encode($request->section);
        $ourWork->meta_title = $request->meta_title;
        $ourWork->meta_description = $request->meta_description;
        $ourWork->cat_id = $request->category_id;
        $ourWork->images = $image;
        $ourWork->short_description = $request->short_description;
        $ourWork->slug = $request->slug;
        if($request->hasFile('og_image')){
            $og_image = time().rand(1,50).'.'.$request->file('og_image')->extension();
            $request->file('og_image')->move(public_path('images'),$og_image);
            $ourWork->og_image = $og_image;
        }
        $ourWork->og_title = $request->og_title;
        $ourWork->save();
        if($ourWork->id){
            return redirect()->route('our-work.list')->with('success','New Record Created');
        }
        return back()->with('failed','Something Went Wrong');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OurWork  $ourWork
     * @return \Illuminate\Http\Response
     */
    public function show(OurWork $ourWork)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OurWork  $ourWork
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $work = OurWork::find($id);
        $categories = Category::all();
        return view('admin.our-works.edit',compact('work','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OurWork  $ourWork
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'category_id' => 'required',
            'short_description' => 'required'
        ]);
        $ourWork =  OurWork::find($request->id);
        if($request->hasFile('image')){
            $image = time().rand(1,50).'.'.$request->file('image')->extension();
            $request->file('image')->move(public_path('images'),$image);
            $ourWork->images = $image;
        }
        $ourWork->name = $request->name;
        $ourWork->description = json_encode($request->section);
        $ourWork->meta_title = $request->meta_title;
        $ourWork->meta_description = $request->meta_description;
        $ourWork->cat_id = $request->category_id;
        $ourWork->short_description = $request->short_description;
        $ourWork->slug = $request->slug;
        if($request->hasFile('og_image')){
            $og_image = time().rand(1,50).'.'.$request->file('og_image')->extension();
            $request->file('og_image')->move(public_path('images'),$og_image);
            $ourWork->og_image = $og_image;
        }
        $ourWork->og_title = $request->og_title;
        if($ourWork->save()){
            return redirect()->route('our-work.list')->with('success','Updated Successfully');
        }
        return back()->with('failed','Something Went Wrong');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OurWork  $ourWork
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(OurWork::where('id', $id)->delete()){
            return back()->with('success','Deleted Successfully');
        }
        return back()->with('failed','Something Went Wrong');
    }

    public function front_end_view(){
        $ourWork = OurWork::all();
        $categories = Category::all();
        return view('our-work',compact('ourWork','categories'));
    }

    public function view_work($slug){
        $work = OurWork::where('slug', $slug)->first();
        return view('portfolio-item', compact('work'));
    }

    public function remove_image(Request $request){
        $request->validate([
            'id' => 'required',
            'image' => 'required'
        ]);
        $ourWork = OurWork::find($request->id);
        $images = explode(',', $ourWork->images);
        $new_images = [];
        foreach ($images as $image){
            if($image!=$request->image){
                $new_images[] = $image;
            }
        }
        $ourWork->images = $new_images;
        if($ourWork->save()){
            return response()->json(['msg'=>'Deleted Successfully','status'=>'success']);
        }
        return response()->json(['msg'=>'Something Went Wrong','status'=>'failed']);
    }
}
