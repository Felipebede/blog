<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Post;

class PostsAdminController extends Controller
{

    private $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function index()
    {
        $posts = $this->post->paginate(5);

        return view('blog.admin', compact('posts'));
    }

    public function create()
    {
        return view('blog.create');
    }


    public function store(PostRequest $request)
    {
        $this->post->create($request->all());
        return redirect()->route('admin.index');
    }

    public function edit($id)
    {
        $post = $this->post->find($id);

        return view('blog.edit', compact('post'));
    }

    public function update($id, PostRequest $request)
    {
        $this->post->find($id)->update($request->all());
        return redirect()->route('admin.index');
    }

    public function destroy($id)
    {
        $this->post->find($id)->delete();
        return redirect()->route('admin.index');
    }

    public function view($id)
    {
        $post = $this->post->find($id);

        return view('blog.post', compact('post'));

    }


}
