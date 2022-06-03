<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Route;
use App\Models\MetaDetail as Meta;
use App\Models\Services;
use App\Models\OurWork;
use App\Models\Category;
use App\Models\HomePageSlider;

class MetaDetails extends Controller
{
    protected $url;
    public $meta;

    public function __construct(){
        $this->url = Route::getFacadeRoot()->current()->uri();
        $this->meta = Meta::where('url', $this->url)->first();
    }

    public function index(){
        $metas = Meta::all();
        return view('admin.meta.list',compact('metas'));
    }
    
    public function create(){
        return view('admin.meta.add');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'url' =>'required',
            'meta_title' => 'required',
            'meta_description' => 'required'
        ]);
        $meta = new Meta();
        $meta->title = $request->title;
        $meta->meta_title = $request->meta_title;
        $meta->meta_description = $request->meta_description;
        $meta->url = $request->url;
        $meta->og_title = $request->og_title;
        $meta->og_image = $request->og_image;
        $meta->save();
        if($meta->id){
            return redirect()->route('meta.list')->with('success','Meta Created');
        }
        return $request;
    }

    public function edit($id){
        $meta = Meta::find($id);
        return view('admin.meta.edit',compact('meta'));
    }

    public function update(Request $request){
        $request->validate([
            'title' => 'required',
            'meta_description' => 'required',
            'meta_title' => 'required'
        ]);
        $meta = Meta::find($request->id);
        $meta->title = $request->title;
        $meta->meta_title = $request->meta_title;
        $meta->meta_description = $request->meta_description;
        $meta->og_title = $request->og_title;
        $meta->og_image = $request->og_image;
        if($meta->save()){
            return redirect()->route('meta.list')->with('success','Meta Updated');
        }
    }

    public function home(){
        $news = Blog::where('type', '2')->orderBy('id','DESC')->take(3)->get();
        $latest_news = Blog::where('type', '2')->orderBy('id','DESC')->take(1)->first();
        $slides = HomePageSlider::where('status', '1')->orderBy('sequence','ASC')->get();
        return view('home',['meta'=>$this->meta,'news'=>$news,'latest_news'=>$latest_news,'slides'=>$slides]);
    }

    public function about(){
        return view('about',['meta'=>$this->meta]);
    }

    public function our_services(){
        $services = Services::all();
        return view('services',['meta'=>$this->meta,'services'=>$services]);
    }

    public function our_work(){
        $ourWork = OurWork::all();
        $categories = Category::all();
        return view('our-work',['meta'=>$this->meta,'ourWork'=>$ourWork,'categories'=>$categories]);
    }

    public function blog(){
        $blogs = Blog::where('type','1')->simplePaginate(5);
        return view('blog',['meta'=>$this->meta,'blogs'=>$blogs]);
    }
    
}
