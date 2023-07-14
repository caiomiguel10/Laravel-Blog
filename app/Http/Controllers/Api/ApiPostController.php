<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\PostRequest;


use App\Repositories\PostRepository;


use App\Models\Post;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiPostController extends Controller
{
    public function __construct(private PostRepository $repository)
    {   
    }
    public function index()
    {
       return Post::with(relations: 'categorias')->latest()->get();
    }

    public function store(PostRequest $request)
    {   
        Post::create($request->all());
        return response()->json(['message' => 'Post criado'],201);
    }

    public function show(string $id)
    {   
        $PostModel = Post::with(relations: 'categorias')->find($id);
        
        if($PostModel === null){
          return response()->json(['message' => 'Post nao encontrado'],404);
        }

        return $PostModel;
    
    }

    public function update(PostRequest $request, Post $post)
    {
        $post->fill($request->all());
        $post->save();

        return $post;
    }

   
    public function destroy(int $id)
    {   
        Post::destroy($id);
        return response()->json(['message' => 'Post deletado'],202);
    }
}
