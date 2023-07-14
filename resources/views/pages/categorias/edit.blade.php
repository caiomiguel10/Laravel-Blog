<x-app-layout>
 
    <div class="container text-center">
        <h1 class="fs-5 py-3">Atualize a Categoria</h1>
        
    <form action="{{route('categoria.update',$categorium->id)}}" method="post">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col 12 d-flex justify-content-center">
                <div class="col-6 mb-3">
                    <label for="nome" class="form-label">Nome da Categoria</label>
                    <input type="text" class="form-control"  name="nome" placeholder="Exemplo: Esportes" value={{$categorium->nome}}> 
                  </div>
            </div>
  
        </div>
        
        <div class="row">
            <div class="col 12 d-flex justify-content-center">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-outline-success" type="submit">Atualizar</button>
                  </div>
            </div>
            
        </div>
    </form>
       
        
    </div>
        
    </x-app-layout>
        