<x-app-layout>
   
    <h1 class='fs-2 text-center mt-2'>Detalhes do Post</h1>
    <div class="container my-5">
      
       

        <div class="row">
            
          
            <div class="card-group mt-4">
                <div class="card shadow-lg">
                  @if($post->imagem)
                  <img src="{{ asset("storage/{$post->imagem}") }}" class="card-img-top img" >

                  @endif
                  <div class="card-body">
                    <h1 class="text-primary fs-2">{{$post->titulo}}</h1>
                    <p class="text-body-secondary">{{$post->conteudo}}</p>
                  </div>
                  <div class="card-footer">
                   <p><b>Criado por: </b>{{$post->user->name}}</p>
                   <p><b>Categoria: </b>{{$post->categorias->nome}}</p>
                   <p><b>Horario da criacao: </b>{{$post->created_at}}</p>
                  </div>
                </div>
              </div>
           
        </div>
    </div>





</div>

</x-app-layout>
