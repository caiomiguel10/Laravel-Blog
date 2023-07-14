<x-app-layout>
 <style>
     main{
        height: 80vh;
    }
 </style>
    <div class="container text-center">
        <h1 class="fs-5 p2-3">Criacao de Posts</h1>
    
    <form action="{{route('post.update',$post->id)}}" method="post">
        @method('PUT')
        @csrf
        
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <div class="col-md-6 mb-3">
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <input type="text" class="form-control border border-primary"  name="titulo" placeholder="Titulo Post" value="{{$post->titulo}}" value={{old('titulo')}}> 
                  </div>
            </div>           
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center p-2">
                <div class="col-md-6 mb-3">
                    
                    <textarea class="form-control border border-primary" placeholder="Digite o  Conteúdo" name="conteudo" id="conteudo" rows="5" cols="10" value={{old('titulo')}}>{{$post->conteudo}}</textarea>
                  </div>
            </div>

        </div>
        <div class="row">
             <div class="col-12 d-flex justify-content-center ">
                <div class="col-6 mb-3 ">
                    
                    <input class="form-control border  rounded" type="file" id="formFile">
                  </div>
            </div>
            
        </div>
    
        <div class="row justify-content-center m-0">
            <div class="col-md-6 mb-3 p-0">
               
                    <select name="categoria_id" id="categoria_id" class="form-select border border border-primary">
                        
                        <option value="{{$post->categoria_id}}">{{$post->categorias->nome}}</option>
                        @foreach ($categorias as $categoria)

                        <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                        @endforeach
                    </select>
            </div>

        </div>
        <div class="row">
            <div class="col 12 d-flex justify-content-center">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-outline-primary" type="submit">Cadastrar</button>
                  </div>
            </div>
            
        </div>
    </form>
       
        
    </div>
        
    </x-app-layout>
   