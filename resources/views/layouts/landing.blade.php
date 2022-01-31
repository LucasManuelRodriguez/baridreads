@extends('layouts.app')
@section('content')
    <header>
        <h1 class="site-heading text-center text-faded d-none d-lg-block">
            <span class="site-heading-upper text-primary mb-3">BARIDREADS</span>
        </h1>
    </header>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" id="mainNav">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{route('home')}}">Inicio</a></li>
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{route('show')}}">Productos</a></li>
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{route('about')}}">Sobre Baridreads</a></li>
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{route('contact')}}">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        @yield('content2')
    </main>
    <script src="./Album example · Bootstrap v5.1_files/bootstrap.bundle.min.js.descarga" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

@endsection

