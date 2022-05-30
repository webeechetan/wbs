<?php

namespace App\Http\Controllers;

use App\Models\HomePageSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 

class HomePageSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = HomePageSlider::all();
        return view('admin.slider.list',compact('slides'));
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
            'slide' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
            'sequence' => 'required|integer'
        ]);

        $slide = uniqid().rand(1,50).'.'.$request->file('slide')->extension();
        $request->file('slide')->move(public_path('images'),$slide);
        $slider = new HomePageSlider();
        $slider->slide = $slide;
        $slider->sequence = $request->sequence;
        $slider->status = 1;
        if($request->hasFile('logo')){
            $logo = uniqid().rand(1,50).'.'.$request->file('logo')->extension();
            $request->file('logo')->move(public_path('images'),$logo);
            $slider->logo = $logo;
        }
        $slider->link = $request->link;
        $slider->description = $request->description;
        $slider->save();
        if($slider->id){
            return redirect()->route('slide.list')->with('success','Slide Created');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomePageSlider  $homePageSlider
     * @return \Illuminate\Http\Response
     */
    public function show(HomePageSlider $homePageSlider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomePageSlider  $homePageSlider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slide = HomePageSlider::find($id);
        return view('admin.slider.edit',compact('slide'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomePageSlider  $homePageSlider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'slide' => 'mimes:jpeg,jpg,png,gif|max:10000',
            'sequence' => 'required|integer'
        ]);
        $slide = HomePageSlider::find($request->id);
        if($request->hasFile('slide')){
            $image = uniqid().rand(1,50).'.'.$request->file('slide')->extension();
            $request->file('slide')->move(public_path('images'),$image);
            $slide->slide = $image;
        }
        $slide->sequence  = $request->sequence;
        if($request->hasFile('logo')){
            $logo = uniqid().rand(1,50).'.'.$request->file('logo')->extension();
            $request->file('logo')->move(public_path('images'),$logo);
            $slide->logo = $logo;
        }
        $slide->link = $request->link;
        $slide->description = $request->description;
        if($slide->save()){
            return redirect()->route('slide.list')->with('success','Slide Updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomePageSlider  $homePageSlider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slide = HomePageSlider::find($id);
        $logo_path = 'images/'.$slide->logo;
        $slide_path = 'images/'.$slide->slide;

        if(File::exists($slide_path)) {
            File::delete($slide_path);
        }
        if(File::exists($logo_path)) {
            File::delete($logo_path);
        }
        if(HomePageSlider::where('id',$id)->delete()){
            return redirect()->route('slide.list')->with('success','Slide Deleted');
        }
    }

    public function change_status($id,$status){
        $slide = HomePageSlider::find($id);
        $slide->status = $status;
        if($slide->save()){
            return redirect()->route('slide.list')->with('success','Status Changed');
        }
    }
}
