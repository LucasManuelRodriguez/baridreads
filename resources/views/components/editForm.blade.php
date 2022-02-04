@extends('layouts.landing')
@section('content2')
    @auth
        <br>
        <section class="container d-flex justify-content-center">
            <form action="{{route('update', $rasta->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="exampleInputEmail">TITULO</label>
                    <br>
                    <input class="form-control" type="text" name="name" id="exampleInputEmail" value="{{$rasta->name}}">
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">DESCRIPCION DEL PRODUCTO</label>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{$rasta->description}}</textarea>
                </div>
                <br>
                <div class="form-group">
                    <input class="custom-file-input" type="url" name="img" id="exampleInputPassword1" value="{{$rasta->img}}">
                    <label for="exampleInputPassword1">Seleccionar Archivo</label>
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleInputPrice">PRECIO</label>
                    <br>
                    <input class="form-control text-center" type="number" name="price" id="exampleInputPrice" value={{$rasta->price}} placeholder="$0">
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleInputCantidad">Cantidad</label>
                    <br>
                    <input class="form-control text-center" type="number" name="cantidad" id="exampleInputCantidad" value={{$rasta->cantidad}}>
                </div>
                <br>
                <button  class="form-control btn c-card" type="submit">ACTUALIZAR</button>
            </form>
        </section>
        <br>
        {{-- <section class="container d-flex justify-content-center">
            <a href="{{route('show')}}" class="btn c-card">AGREGAR PRODUCTO</a>
        </section>   --}}
    @endauth
    <script src="./Album example · Bootstrap v5.1_files/bootstrap.bundle.min.js.descarga" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

@endsection