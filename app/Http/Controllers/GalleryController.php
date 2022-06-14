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
        // $request->validate([
        //     'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000'
        // ]);
        // dd($request->file('image'));

        if($request->hasfile('image'))
         {
            foreach($request->file('image') as $key => $file)
            {
                $name = $file->getClientOriginalName();
                $existing_name = Gallery::where('image',$name)->first();
                if($existing_name){
                    $name = '1-'.$name;
                }
                $path = $file->move(public_path('images'),$name);
                $gallery = new Gallery();
                $gallery->name = $name;
                $gallery->image = $name;
                $gallery->save();
            }
         }
        if(1){
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
        $image = $request->file('image')->getClientOriginalName();
        if(Gallery::where('image', $image)->first()){
            $image = '1-'.$image;
        }
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
