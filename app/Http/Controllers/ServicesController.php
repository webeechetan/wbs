<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;
use App\Models\Category;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Services::all();
        return view('admin.services.list',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.add');
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
            'description' => 'required|min:15',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'icon' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
        ]);
        $icon = time().rand(1,50).'.'.$request->file('icon')->extension();
        $request->file('icon')->move(public_path('images'),$icon);

        $service = new Services();
        $service->title = $request->title;
        $service->description = $request->description;
        $service->meta_title = $request->meta_title;
        $service->meta_description = $request->meta_description;
        $service->icon = $icon;
        $service->save();
        if($service->id){
            return redirect()->route('service.list')->with('success','Service Created');
        }
        return back()->with('failed','Something Went Wrong');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function show($title)
    {
        $service = Services::where('title',$title)->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Services::find($id);
        return view('admin.services.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|min:6',
            'description' => 'required|min:15',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'icon' => 'mimes:jpeg,jpg,png,gif|max:10000',
        ]);

        $service = Services::find($request->id);
        if($request->hasFile('icon')){
            $icon = time().rand(1,50).'.'.$request->file('icon')->extension();
            $request->file('icon')->move(public_path('images'),$icon);
            $service->icon = $icon;
        }
        $service->title = $request->title;
        $service->description = $request->description;
        $service->meta_title = $request->meta_title;
        $service->meta_description = $request->meta_description;
        $service->save();
        if($service->id){
            return redirect()->route('service.list')->with('success','Service Updated');
        }
        return back()->with('failed','Something Went Wrong');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Services::where('id', $id)->delete()){
            return redirect()->route('service.list')->with('success','Service Deleted');
        }
        return back()->with('failed','Something Went Wrong');
    }

    public function front_end_view(){
        $services = Services::all();
        return view('services',compact('services'));
    }
}
