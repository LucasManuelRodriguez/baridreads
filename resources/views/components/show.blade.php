@extends('layouts.landing')
@section('content2')
    @auth
        <br>
        <section class="container d-flex justify-content-center">
            <a href="#" class="btn btn-outline-success">AGREGAR PRODUCTO</a>
        </section>  
    @endauth
    @include('card')
    <script src="./Album example · Bootstrap v5.1_files/bootstrap.bundle.min.js.descarga" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

@endsection