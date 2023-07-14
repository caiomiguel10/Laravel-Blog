<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;


use App\Models\Categoria;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {   
        $pesquisa  = $request->search;
        $posts = Post::orderBy('titulo','desc')->where(function ($query) use ($pesquisa) {
            if($pesquisa){
                $query->where('titulo', 'Like', "%{$pesquisa}%");
            }


        })->paginate(8);    

        // $posts = Post::all();
        return view('dashboard',['posts'=>$posts]);
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {

        $user = Auth::user();
        $posts = $user->posts()->paginate(8);

    return view('dashboard', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
