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
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.html">Home</a></li>
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="about.html">About</a></li>
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="products.html">Products</a></li>
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="store.html">Store</a></li>
                </ul>
            </div>
        </div>
    </nav>
@endsection