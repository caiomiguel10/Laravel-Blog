<x-app-layout>
    <style>
        main {
            height: 100vh;
        }
    </style>
   
    <div class="container my-5">

        <div class="row justify-content-center align-items-center">
            <div class="col-md-8 mt-2">
                <div class="container-fluid">
                    <form class="d-flex" role="search" action="{{ route('dashboard.index') }}" method="GET">
                        <input class="form-control me-2 border border-primary" type="search"
                            placeholder="Procure seus Posts" name="search">
                        <button class="btn btn-outline-primary" type="submit">Procurar</button>
                    </form>
                </div>
            </div>
            <div class="col-md-2 mt-2">
                <div class="container-fluid">
                    <form class="d-flex" role="search">
                        <a class="btn btn-outline-primary" type="submit"
                            href="{{ route('dashboard.show', Auth::user()->id) }}">Meus Posts</a>
                    </form>
                </div>
            </div>

        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-3 mt-3 ml-0 p-1  justify-content-center mb-4 ">

            @foreach ($posts as $post)
                <div class="card shadow-sm p-1 m-1 shadow-lg ">
                    {{-- <img src="{{ asset("storage/{$post->imagem}") }}" class="img-fluid" width="200px" >  --}}
                    <div class="card-body">
                        <h5 class="card-title text-center"><b>{{ $post->titulo }}</b></h5>
                        </p>
                        <p class="text-overflow-ellipsis" style="max-height: 150px; overflow: hidden;">
                            {{ $post->conteudo }}</p>
                    </div>
                    <div class="card-footer bg-transparent  justify-content-center align-items-center">
                        <div class="row justify-content-center">
                            <div class="col-12 text-center">
                                <div class="col-12 align-items-center">
                                    <a href="{{ route('post.show', $post->id) }}" class="btn btn-primary "> Saber mais <i class="bi bi-plus-lg text-white px-2"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-12">
                      <small class="text-body-secondary ">Criado por: {{ $post->user->name }}</small>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="m-2">
            {{ $posts->links() }}
        </div>

    </div>





    </div>

</x-app-layout>
