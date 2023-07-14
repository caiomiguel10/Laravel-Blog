<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">
        <link href="/css/estilos.css" rel="stylesheet">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            .img{
                height: 30rem;
                width: 100rem
                    
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                        
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            <footer class="text-body-secondary py-5 shadow-lg border bg-dark ss" style="background-color: rgb(211, 210, 210)">
                <div class="container">
                    <p class="float-end mb-1">
                     
                    <span class="text-white">Criado por: <b class="text-white">Caio Miguel Fernnades  <i class="bi bi-pc-display-horizontal text-white"></i></b></p>     
                    </span>
                    <div class="col-12" id="social-icons fs-3">
                        <a href="https://api.whatsapp.com/send?phone=21990111709" target="_blank"> <i class="bi bi-whatsapp fs-2 text-success"></i></a>  
                        <a href="https://www.linkedin.com/in/caio-miguel-406662197/" target="_blank"> <i class="bi bi-linkedin fs-2 text-primary"></i></a>  
                        <a href="https://github.com/CaioFernandes10" target="_blank">  <i class="bi bi-github fs-2 text-white"></i></i></a> 
                        <a href="https://portifolio-caio-miguel.netlify.app/" target="_blank"><i class="bi bi-globe fs-2 text-white"></i></i></a> 
                    </div>
                    
            
              </footer>
        </div>
    </body>
</html>
