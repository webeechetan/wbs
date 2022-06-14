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
            'category_id' => 'required',
        ]);
        $ourWork = new OurWork();
        $ourWork->name = $request->name;
        $ourWork->description = json_encode($request->section);
        $ourWork->heading = json_encode($request->heading);
        $ourWork->meta_title = $request->meta_title;
        if($request->meta_description){
            $ourWork->meta_description = $request->meta_description;
        }else{
            $ourWork->meta_description = 'Our Work';
        }

        $ourWork->cat_id = implode(',',$request->category_id,);
        $ourWork->images = $request->image;
        $ourWork->slug = $request->slug;
        $ourWork->og_image = $request->og_image;
        $ourWork->og_title = $request->og_title;
        if($request->publish_at){
            $ourWork->publish_at = $request->publish_at;
        }
        $ourWork->gallery_images = $request->gallery_images;
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
            'category_id' => 'required',
            'image' => 'required'
        ]);
        $ourWork =  OurWork::find($request->id);
        $old_gallery_images = explode(",",$ourWork->gallery_images);
        $ourWork->images = $request->image;
        $ourWork->name = $request->name;
        $ourWork->description = json_encode($request->section);
        $ourWork->heading = json_encode($request->heading);
        $ourWork->meta_title = $request->meta_title;
        $ourWork->meta_description = $request->meta_description;
        $ourWork->cat_id = implode(',',$request->category_id,);
        $ourWork->slug = $request->slug;
        $ourWork->og_image = $request->og_image;
        $ourWork->og_title = $request->og_title;
        if($request->publish_at){
            $ourWork->publish_at = $request->publish_at;
        }
        $ourWork->gallery_images = $request->gallery_images;
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
        $array = ['title'=>$work->meta_title, 'meta_description'=>$work->meta_description,'og_title'=>$work->og_title,'og_image'=>$work->og_image];
        $meta = (object) $array;
        return view('portfolio-item', compact('work','meta'));
    }

    public function remove_image(Request $request){
        $request->validate([
            'id' => 'required',
            'image' => 'required'
        ]);
        $ourWork = OurWork::find($request->id);
        $images = explode(',', $ourWork->gallery_images);
        $new_images = [];
        foreach ($images as $image){
            if($image!=$request->image){
                $new_images[] = $image;
            }
        }
        $ourWork->gallery_images = implode(",",$new_images);
        if($ourWork->save()){
            return response()->json(['msg'=>'Deleted Successfully','status'=>'success']);
        }
        return response()->json(['msg'=>'Something Went Wrong','status'=>'failed']);
    }
}
