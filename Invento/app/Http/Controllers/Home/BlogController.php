<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;
use Image;
use Illuminate\Support\Carbon;

class BlogController extends Controller
{
    public function AllBlog(){
        $blogs = Blog::latest()->get();
        return view('admin.blogs.blogs_all',compact('blogs'));
    }

    public function AddBlog(){
        $categories = BlogCategory::orderBy('blog_category','ASC')->get();
        return view('admin.blogs.blogs_add',compact('categories'));
    }

    public function StoreBlog(Request $request){
        $image=$request->file('blog_image');
        $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        
        Image::make($image)->resize(430,327)->save('upload/blog/'.$name_gen);
        $save_url = 'upload/blog/'.$name_gen;

        Blog::insert([
            'blog_category_id'=>$request->blog_category_id,
            'blog_title'=>$request->blog_title,
            'blog_tags'=>$request->blog_tags,
            'blog_description'=>$request->blog_description,
            'blog_image'=>$save_url,
            'created_at'=> Carbon::now(),
        ]);

        $notification=array(
            'message'=>'Blog Inserted Successfully',
            'alert-type'=>'success'
        );

        return redirect()->route('all.blog')->with($notification);
    }

    public function EditBlog($id){
        $blogs = Blog::FindOrFail($id);
        $categories = BlogCategory::orderBy('blog_category','ASC')->get();
        return view('admin.blogs.blogs_edit',compact('blogs','categories'));
    }

    public function UpdateBlog(Request $request){
        $blog_id = $request->id;

        if($request->file('blog_image')){
            $image=$request->file('blog_image');
            $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            
            Image::make($image)->resize(430,327)->save('upload/blog/'.$name_gen);
            $save_url = 'upload/blog/'.$name_gen;

            Blog::FindOrFail($blog_id)->update([
                'blog_category_id'=>$request->blog_category_id,
                'blog_title'=>$request->blog_title,
                'blog_tags'=>$request->blog_tags,
                'blog_description'=>$request->blog_description,
                'blog_image'=>$save_url,
            ]);

            $notification=array(
                'message'=>'Blog Updated With Image Successfully',
                'alert-type'=>'success'
            );

            return redirect()->route('all.blog')->with($notification);
        }else{
            Blog::FindOrFail($blog_id)->update([
                'blog_category_id'=>$request->blog_category_id,
                'blog_title'=>$request->blog_title,
                'blog_tags'=>$request->blog_tags,
                'blog_description'=>$request->blog_description,
            ]);

            $notification=array(
                'message'=>'Blog Updated Without Image Successfully',
                'alert-type'=>'success'
            );

            return redirect()->route('all.blog')->with($notification);
        }
    }
}
