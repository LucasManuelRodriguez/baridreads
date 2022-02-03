@extends('layouts.landing')
@section('content2')
    <br>
            <section class="d-flex justify-content-center d-grid gap-2 ">
                <a href="#" class="btn c-card btn-sm">RASTAS SIMPLES</a>
                <a href="#" class="btn c-card btn-sm">RASTAS DOBLES</a>
                <a href="#" class="btn c-card btn-sm">ACCESORIOS</a>
            </section> 
    @auth
        <br>
        <section class="container d-flex justify-content-center">
            <a href="{{route('create')}}" class="btn c-card">AGREGAR PRODUCTO</a>
        </section>  
    @endauth
    @include('card')
    <script src="./Album example · Bootstrap v5.1_files/bootstrap.bundle.min.js.descarga" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

@endsection