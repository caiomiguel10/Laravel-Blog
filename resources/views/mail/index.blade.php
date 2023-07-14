@component('mail::message')

# O Post {{$titulo}}
- foi criado por **{{$post->user->name}}** 
## Conteudo do Post
{{$conteudo}}

@endcomponent
