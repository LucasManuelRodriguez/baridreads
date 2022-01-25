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
@endsection

