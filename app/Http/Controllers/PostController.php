<?php

namespace App\Http\Controllers;

use App\Mail\PostCreate;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\PostRequest;
use App\Repositories\PostRepository;
use App\Models\Post;
use App\Models\Categoria;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
  
    public function __construct(private PostRepository $repository)
    {   
    }

    public function index()
    {    
        $user = Auth::user();
        $msg = session('mensagem.sucesso');

        $posts = $user->posts()->latest()->paginate(6);
        
        return view('pages.posts.index',['posts'=>$posts,'msg'=>$msg]);
    }

   
    public function create()
    {           
        $categorias = Categoria::all();
        return view('pages.posts.create',['categorias'=>$categorias]);
    }

    public function store(PostRequest $request)
    {   

        $posts = $this->repository->add($request);

        return to_route('post.index')
        ->with('mensagem.sucesso', 1);
       
    }
        
    
   
    public function show(Post $post)
    {
        return view('pages.posts.show',['post'=>$post]);
    }

   
    public function edit(Post $post)
    {
        $categorias = Categoria::all();

        return view('pages.posts.edit',['post' => $post, 'categorias'=>$categorias]);

    }

   
    public function update(Request $request, Post $post)
    {
        $post->update($request->all());

        return to_route('post.index')
        ->with('mensagem.sucesso', 2);
    }

    
    public function destroy(Post $post)
    {
        $post->delete();
        
        return to_route('post.index')
        ->with('mensagem.sucesso', 3);
    }
}

