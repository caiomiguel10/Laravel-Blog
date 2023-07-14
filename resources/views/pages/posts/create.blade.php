<x-app-layout>
    <style>
    main{
        height: 90vh;
    }
    </style>
   
    <div class="container text-center">
        <h1 class="fs-5 py-3">Criacao de Posts</h1>
    
    <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
        @csrf
       

        
        <div class="row mb-2">
            <div class="col-12 d-flex justify-content-center">
                <div class="col-md-6 mb-2 shadow-lg">
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <input type="text" class="form-control border border-primary shadow-lg"  name="titulo" placeholder="Digite o titulo do post" value={{old('titulo')}}> 
                    @if($errors->has('titulo'))
                        <div class="alert alert-danger mt-2">
                            {{(($errors->first('titulo')))}}
                        </div>
                     @endif
                  </div>
                  
            </div>
            
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center mb-2">
                <div class="col-md-6 mb-2 shadow-lg">
                        
                    <textarea class="form-control border border-primary shadow-lg " placeholder="Digite o  Conteúdo do Post" name="conteudo" id="conteudo" rows="5" cols="10"></textarea>
                    @if($errors->has('conteudo'))
                    <div class="alert alert-danger mt-2">
                        {{(($errors->first('conteudo')))}}
                    </div>
                 @endif
                  </div>

            </div>

        </div>
        <div class="row">
             <div class="col-12 d-flex justify-content-center ">
                <div class="col-6 mb-2 shadow-lg ">

                    <input class="form-control border border-primary shadow-lg p-2 input-file" type="file" id="imagem" name="imagem">
                    @if($errors->has('imagem'))
                    <div class="alert alert-danger mt-2">
                        {{(($errors->first('imagem')))}}
                    </div>
                 @endif
                  </div>
            </div>
            
        </div>
    
        <div class="row justify-content-center">
            <div class="col-6 mb-2" style="width: 51%">

                    <select name="categoria_id" id="categoria_id" class="form-select border border-primary p-2 shadow-lg">
                        
                        <option value="Escolha a Unidade">Escolha a Categoria</option>
                        @foreach ($categorias as $categoria)
                        <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                        @endforeach
                    </select>
                    @if($errors->has('categoria_id'))
                    <div class="alert alert-danger mt-2">
                        {{ $errors->first('categoria_id') }}
                    </div>
                @endif
                   
            </div>

        </div>
        <div class="row">
            <div class="col 6 justify-content-center">
                <div class="d-grid gap-1 col-6 mx-auto">
                    <button class="btn buton-primary shadow-lg text-white" type="submit">Cadastrar</button>
                  </div>
            </div>
            
        </div>
    </div>
    </form>
       
   
        
    </x-app-layout>
   