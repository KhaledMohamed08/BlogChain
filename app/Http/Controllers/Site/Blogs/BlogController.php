<?php

namespace App\Http\Controllers\Site\Blogs;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use Illuminate\Support\Facades\Response;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();

        return view('Site.Pages.Blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Site.Pages.Blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        $blogData = $request->validated();
        $blogData['user_id'] = auth()->id();
        $blog = Blog::create($blogData);
        if ($request->hasFile('image')) {
            $blog->addMediaFromRequest('image')->toMediaCollection('blog_cover');
        }

        return view('Site.Pages.Blog.myBlogs')->with('sucss', 'new blog created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('Site.Pages.Blog.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('Site.Pages.Blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        $blogData = $request->validated();
        $blog->update($blogData);
        if ($request->hasFile('image')) {
            if ($blog->getFirstMedia('blog_cover')) {
                $blog_cover = $blog->getFirstMedia('blog_cover');
                $blog_cover->delete();
            }
            $blog->addMediaFromRequest('image')->toMediaCollection('blog_cover');
        }

        return redirect()->route('blog.show', $blog->id)->with('sucss', 'Blog Updated Sucssefully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        // $blog->deleteMedia();
        $blog->delete();

        return redirect()->route('my.blogs')->with('sucss',$blog->title . ' ' . 'Blog Deleted Sucssfully');
    }

    public function myBlogs()
    {
        $user = auth()->user();
        $blogs = $user->blogs;

        return view('Site.Pages.Blog.myBlogs', compact('blogs'));
    }

    public function deleteBlogCover(Blog $blog)
    {
        $mediaItem = $blog->getFirstMedia('blog_cover');

        if ($mediaItem) {
            $mediaItem->delete();
            return Response::json(['message' => 'Cover deleted'], 200);
        }

        return Response::json(['message' => 'Cover not found'], 404);
    }
}
