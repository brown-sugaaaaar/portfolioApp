<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class AdminBlogController extends Controller
{
    public function index () {
        $blogs = Blog::all();
        return view('admin.blog.index',[
            'blogs' => $blogs
        ]);
    }

    public function edit(Blog $blog, $id)
    {
        $blog = Blog::find($id);
        return view('admin.blog.edit',[
            'blog' => $blog
        ]);
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        // $blog = new Blog;
        $blog = Blog::create($request->all());
        // $blog->title = $request->input('title');
        // $blog->detail = $request->input('detail');
        // $blog->image_url = $request->input('image_url');

        // $blog->title = $request->title;
        // $blog->detail = $request->detail;
        // $blog->image_url = $request->image_url;
        $request->file('image')->storeAs('/blog',$blog->image_url.'.jpg','public');
        // $blog->save();
        // $request->save();

        // return redirect('/admin/blog');

        return redirect('/admin/blog');

    }


    public function update(Request $request, Blog $blog,$id)
    {
        $blog = Blog::find($id);
        // $blog->title = $request->input('title');
        // $blog->detail = $request->input('detail');
        // $blog->image_url = $request->input('image_url');
        $blog->title = $request->title;
        $blog->detail = $request->detail;
        $blog->image_url = $request->image_url;
        $blog->save();

        return redirect('/admin/blog');
    }

    public function destroy(Blog $blog)
    {
        //
    }
}
