<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Album example · Bootstrap v5.1</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">
  <!-- Bootstrap core CSS -->
  <link href="./Album example · Bootstrap v5.1_files/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Favicons -->
  <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
  <link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#7952b3">
  <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
  </style>
</head>
<body>    

  <main >
    <div class="album py-5 bg-light">
      <div class="container align-items-center">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          @foreach ($rastas as $rasta)
          <div class="col d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
              <img class="bd-placeholder-img card-img-top" src="{{$rasta->img}}" alt="{{$rasta->name}}" width="100%" height="100%">
              <div class="card-body">
                <h5 class="card-title">{{$rasta->name}}</h5>
                <p class="card-text">{{$rasta->description}}</p>
                <div class="d-flex justify-content-around align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-outline-success">+</button>
                    <a href="#" class="btn btn-outline-success">COMPRAR</a>
                    <button type="button" class="btn btn-outline-success">-</button>
                  </div>
                </div>
                <br>
                <div class="d-flex justify-content-around align-items-center">
                  @auth
                    <div class="btn-group">
                      <a href="#" class="btn btn-outline-success">EDITAR</a>
                      <a href="#" class="btn btn-outline-success">BORRAR</a>
                    </div>
                  @endauth
                </div>
              </div>
            </div>
          </div>  
          @endforeach  
        </div>
      </div>
    </div>
  </main>
  
  <script src="./Album example · Bootstrap v5.1_files/bootstrap.bundle.min.js.descarga" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>