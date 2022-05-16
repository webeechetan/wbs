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
        $files = []; 
        if($request->hasfile('images')){
            foreach($request->file('image') as $file)
            {
                $name = time().rand(1,50).'.'.$file->extension();
                $file->move(public_path('images'), $name);  
                $files[] = $name;  
            }
        }
        $request->validate([
            'name' => 'required',
            // 'meet_the_client' => 'required',
            // 'breif' => 'required',
            // 'challenge' => 'required',
            // 'what_we_did' => 'required',
            // 'result' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'category_id' => 'required',
        ]);

        $ourWork = new OurWork();
        $ourWork->name = $request->name;
        // $ourWork->meet_the_client = $request->meet_the_client;
        // $ourWork->brief = $request->breif;
        // $ourWork->challenge = $request->challenge;
        // $ourWork->what_we_did = $request->what_we_did;
        // $ourWork->result = $request->result;
        $ourWork->description = json_encode($request->section);
        $ourWork->meta_title = $request->meta_title;
        $ourWork->meta_description = $request->meta_description;
        $ourWork->cat_id = $request->category_id;
        $ourWork->images = $files;
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
        $files = []; 
        if($request->hasfile('images')){
            foreach($request->file('image') as $file)
            {
                $name = time().rand(1,50).'.'.$file->extension();
                $file->move(public_path('images'), $name);  
                $files[] = $name;  
            }
        }else{
            dd('s');
        }

        dd($files);
        $ourWork =  OurWork::find($request->id);
        $ourWork->name = $request->name;
        $ourWork->description = json_encode($request->section);
        $ourWork->meta_title = $request->meta_title;
        $ourWork->meta_description = $request->meta_description;
        $ourWork->cat_id = $request->category_id;
        $old_images = explode(',', $ourWork->images);
        $r = array_merge($old_images, $files);
        dd($r);
        $ourWork->images = array_merge($old_images,$files);
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

    public function view_work($work){
        $work = OurWork::where('name', $work)->first();
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
