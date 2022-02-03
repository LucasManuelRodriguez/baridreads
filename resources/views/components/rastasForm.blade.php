@extends('layouts.landing')
@section('content2')
    @auth
        <br>
        <section class="container d-flex justify-content-center">
            <form action="{{route('store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail">TITULO</label>
                    <br>
                    <input class="form-control" type="text" name="name" id="exampleInputEmail" placeholder="Titulo del producto...">
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">DESCRIPCION DEL PRODUCTO</label>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <br>
                <div class="form-group">
                    <input class="custom-file-input" type="url" name="img" id="exampleInputPassword1" placeholder="Imagen del producto">
                    <label for="exampleInputPassword1">Seleccionar Archivo</label>
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleInputPrice">PRECIO</label>
                    <br>
                    <input class="form-control text-center" type="number" name="price" id="exampleInputPrice" value="10" placeholder="$0">
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleInputCantidad">Cantidad</label>
                    <br>
                    <input class="form-control text-center" type="number" name="cantidad" id="exampleInputCantidad" placeholder="0" value="4">
                </div>
                <br>
                <button  class="form-control btn c-card" type="submit">AGREGAR PRODUCTO</button>
            </form>
        </section>
        <br>
        {{-- <section class="container d-flex justify-content-center">
            <a href="{{route('show')}}" class="btn c-card">AGREGAR PRODUCTO</a>
        </section>   --}}
    @endauth
    <script src="./Album example · Bootstrap v5.1_files/bootstrap.bundle.min.js.descarga" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

@endsection