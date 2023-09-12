<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Image;

class AboutController extends Controller
{
    public function AboutPage(){
        $aboutpage = About::find(1);
        return view('admin.about_page.about_page_all',compact('aboutpage'));
    }

    public function UpdateAbout(Request $request){
        $about_id = $request->id;

        if($request->file('about_image')){
            $image=$request->file('about_image');
            $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            
            Image::make($image)->resize(523,605)->save('upload/home_about/'.$name_gen);
            $save_url = 'upload/home_about/'.$name_gen;

            About::FindOrFail($about_id)->update([
                'title'=>$request->title,
                'short_title'=>$request->short_title,
                'video_url'=>$request->video_url,
                'home_slide'=>$save_url,
            ]);

            $notification=array(
                'message'=>'Home Slide Updated With Image Successfully',
                'alert-type'=>'success'
            );

            return redirect()->back()->with($notification);
        }else{
            HomeSlide::findOrFail($slide_id)->update([
                'title'=>$request->title,
                'short_title'=>$request->short_title,
                'video_url'=>$request->video_url,
                'home_slide'=>'',
            ]);

            $notification=array(
                'message'=>'Home Slide Updated Without Image Successfully',
                'alert-type'=>'success'
            );

            return redirect()->back()->with($notification);
        }
    }
}
