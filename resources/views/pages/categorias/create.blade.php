<x-app-layout>
 <style>
 main{
            height: 80vh;
        }
 </style>
<div class="container text-center ">
    <h1 class="fs-5 py-3">Criacao de Categorias</h1>

<form action="{{route('categoria.store')}}" method="post">
    @csrf
    <div class="row">
        <div class="col 12 d-flex justify-content-center">
            <div class="col-6 mb-3">
                <label for="nome" class="form-label">Nome da Categoria</label>
                <input type="text" class="form-control"  name="nome" placeholder="Exemplo: Esportes" value={{old('nome')}}>
                @if($errors->has('nome'))
                <div class="alert alert-danger mt-2">
                    {{ $errors->first('nome') }}
                </div>
            @endif 
              </div>
        </div>
        
    </div>

    <div class="row">
        <div class="col 12 d-flex justify-content-center">
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-outline-success" type="submit">Cadastrar</button>
              </div>
        </div>
        
    </div>
</form>
   
    
</div>
    
</x-app-layout>
    