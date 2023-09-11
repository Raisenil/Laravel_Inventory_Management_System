<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlide;

class HomeSliderController extends Controller
{
    public function HomeSlider(){
        $homeslide = HomeSlide::find(1);
        return view('admin.home_slide.home_slide_all',compact('homeslide'));
    }

    public function UpdateSlider(Request $request){
        $slide_id = $request->id;

        if($request->file('home_Slide')){
            $image=$request->file('home_slide');
            $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        }
    }
}
