<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriasRequest;
use App\Models\Categoria;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $categorias = Categoria::paginate(6);
         $msg = session('mensagem.sucesso');
        return view('pages.categorias.index',['categorias' => $categorias, 'msg'=>$msg]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoriasRequest $request)
    {
        
        Categoria::create($request->all());
        return to_route('categoria.index')
        ->with('mensagem.sucesso', 1);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $categorium)
    {
        return view('pages.categorias.edit',['categorium'=>$categorium]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $categorium)
    {
        $categorium->update($request->all());

        return to_route('categoria.index')
        ->with('mensagem.sucesso', 2);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categorium)
    {
        $categorium->delete();

        return to_route('categoria.index')
        ->with('mensagem.sucesso', 3);
    }
}
