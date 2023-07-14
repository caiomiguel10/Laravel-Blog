<?php

namespace App\Http\Controllers\Api;

use App\Models\Categoria;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiCategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Categoria::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Categoria::create($request->all());
        return response()->json(['message' => 'Categoria criada'],202);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {   
         $CategoriaModel = Categoria::with(relations: 'posts')->find($id);
        
        if($CategoriaModel === null){
          return response()->json(['message' => 'categoria nao encontrado'],404);
        }
        
        return $CategoriaModel;
    }


    public function update(Request $request, Categoria $categorium)
    {
          $categorium->fill($request->all());
          $categorium->save();

        return $categorium;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
