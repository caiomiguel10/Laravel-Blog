<x-app-layout>
 <style>
     main{
            height: 90vh;
        }
 </style>
    <div class="container text-center">
        <h1 class="fs-5 py-3">Lista de Posts</h1>
        <div class="row justify-content-center">

            <div class="col-md-6 d-flex justify-content-end mb-2">

                <a href="{{route('post.create')}}" class="btn btn-primary m-1 ">Criar Post</a>
            </div>
        </div>
        
     

        <ul class="list-group">
            <div class="row d-flex justify-content-center mb-4">
               
                <div class="col-md-6">
                    @isset($msg)
                    @if($msg === 1)
                    <div class="alert alert-success">
                        Post Criado com Sucesso
                    </div>
                    @elseif($msg === 2)
                    <div class="alert alert-info">
                        Post atulizado com sucesso
                    </div>
                    @elseif($msg === 3)
                    <div class="alert alert-danger">
                        Post deletado com sucesso
                    </div>
                    
                    @endif
                    @endisset

                    @foreach ($posts as $post)
                    <li class="list-group-item d-flex justify-content-between align-items-center p-2 shadow-lg py-2 mb-1">
                       <strong>Titulo: {{$post->titulo }}  <strong></strong></strong>
                        <span class="d-flex p-2">  
                            <a href="{{route('post.edit',$post->id)}}" class="btn btn-primary m-1 ">E</a>
                            <form action="{{route('post.destroy',$post->id)}}"  method="post" class="m-1">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-outline-danger ">X</button>
                            </form>
                        </span>
                        
                    </li>
                    
                    @endforeach
                    {{$posts->links()}}
                </div>
            </div>
      
        </ul>
    </div>
        
</x-app-layout>
        