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
            'slide' => 'required',
            'sequence' => 'required|integer'
        ]);

        
        $slider = new HomePageSlider();
        $slider->slide = $request->slide;
        $slider->sequence = $request->sequence;
        $slider->status = 1;
        $slider->logo = $request->logo;
        $slider->link = $request->link;
        $slider->link_text = $request->link_text;
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
            'slide' => 'required',
            'sequence' => 'required|integer'
        ]);
        $slide = HomePageSlider::find($request->id);
        $slide->slide = $request->slide;
        $slide->sequence  = $request->sequence;
        $slide->logo = $request->logo;
        $slide->link = $request->link;
        $slide->link_text = $request->link_text;
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
