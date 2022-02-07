@props(['rasta'])
<div class="col d-flex justify-content-center">
    <div class="card" style="width: 18rem;">
      <img class="bd-placeholder-img card-img-top" src="{{$rasta->img}}" alt="{{$rasta->name}}" width="100%" height="100%">
      <div class="card-body">
        <div class="d-flex justify-content-around align-items-center">
          <p class="btn c-card">${{$rasta->price}} (5 unidades)</p>
        </div>
        <h5 class="card-title">{{$rasta->name}}</h5>
        <p class="card-text">{{$rasta->description}}</p>
        <div class="d-flex justify-content-around align-items-center">
          <div class="btn-group">
            <button type="button" class="btn btn-outline-success">+</button>
            <button type="button" class="btn btn-outline-success">1</button>
            <button type="button" class="btn btn-outline-success">-</button>
          </div>
          <button type="button" class="btn btn-outline-success">Add To Cart</button>
        </div>
        <br>
        <div class="d-flex justify-content-around align-items-center">
          <a href="#" class="btn c-card">COMPRAR</a>
        </div>
        <br>
        <div class="d-flex justify-content-around align-items-center">
          @auth
            <div class="btn-group">
              {{-- <a href="#" class="btn btn-outline-success">EDITAR</a> --}}
              <form action="{{route('edit', $rasta->id)}}" method="get">
                @csrf
                <button type="submit" class="btn btn-outline-success">EDITAR</button>
              </form>
              <form action="/rastas/{{$rasta->id}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline-success">BORRAR</button>
              </form>
            </div>
          @endauth
        </div>
      </div>
    </div>
  </div>