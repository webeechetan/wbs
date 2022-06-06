<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery::all();
        return view('admin.gallery.list',compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000'
        ]);

        $gallery = new Gallery();
        if($request->name){
            $image = $request->name.rand(1,50).'.'.$request->file('image')->extension();
            $request->file('image')->move(public_path('images'),$image);
        }else{
            $image = time().rand(1,50).'.'.$request->file('image')->extension();
            $request->file('image')->move(public_path('images'),$image);
        }
        $gallery->name = $image;
        $gallery->image = $image;
        $gallery->save();
        if($gallery->id){
            return redirect()->route('gallery.list')->with('success','Image Added');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Gallery::where('id', $id)->delete()){
            return redirect()->route('gallery.list')->with('success','Deleted Successfully');
        }
    }

    public function gallery_list_ajax(Request $request){
        return Gallery::all();
    }

    public function ajax_image_upload(Request $request){
        $name = $request->file('image')->getClientOriginalName();
        $image = time().rand(1,50).'.'.$request->file('image')->extension();
        $request->file('image')->move(public_path('images'),$image);
        $gallery = new Gallery();
        $gallery->image = $image;
        $gallery->name = $image;
        $gallery->save();
        if($gallery->id){
            return response()->json(['msg'=>'Uploaded Successfully',"image"=>$image]);
        }
    }
}
