<x-app-layout>
   <style>
      main{
            height: 90vh;
        }
        
   </style>
    <div class="container text-center">
        <h1 class="fs-5 py-3">Lista de categorias</h1>
        <div class="row justify-content-center">

            <div class="col-md-6 d-flex justify-content-end mb-2">

                <a href="{{route('categoria.create')}}" class="btn btn-success m-1 ">Criar Categoria</a>
            </div>
        </div>
        <ul class="list-group mb-5">
            <div class="row d-flex justify-content-center ">
                <div class="col-md-6">

                    @isset($msg)
                        @if($msg === 1)
                            <div class="alert alert-success">
                               Categoria Criada com Sucesso
                            </div>
                        @elseif($msg === 2)
                            <div class="alert alert-info">
                               Categoria atulizada com sucesso
                            </div>
                        @elseif($msg === 3)
                            <div class="alert alert-danger">
                               Categoria deletada com sucesso
                            </div>
                        @endif
                    @endisset

                    @foreach ($categorias as $categoria)
                    <li class="list-group-item d-flex justify-content-between align-items-center p-2 shadow-lg py-2 mb-1">
                       <strong>{{ $categoria->nome }}</strong>
                        <span class="d-flex p-2">  
                            <a href="{{route('categoria.edit',$categoria->id)}}" class="btn btn-success m-1 ">E</a>
                            @if(Auth::user()->id == 1)
                            <form action="{{route('categoria.destroy',$categoria->id)}}"  method="post" class="m-1">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-outline-danger ">X</button>
                            </form>
                            @endif
                        </span>
                    </li>
        
                    @endforeach
                 {{ $categorias->links() }}
            </div>
           
          
        </ul>
    </div>
        
</x-app-layout>
        