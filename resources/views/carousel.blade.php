<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Carousel Template · Bootstrap v5.1</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">
  <!-- Bootstrap core CSS -->
  <link href="./Carousel Template · Bootstrap v5.1_files/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
  <!-- Custom styles for this template -->
  <link href="./Carousel Template · Bootstrap v5.1_files/carousel.css" rel="stylesheet">
</head>
<body class="bg-light">
  <main>
      <div class="carousel-inner">
              <div class="carousel-item active">
                @foreach ($rastas as $rasta)
                  <img class="bd-placeholder-img card-img-top" src="{{$rasta->img}}" alt="{{$rasta->name}}" width="100%" height="100%">
                  <div class="container">
                    <div class="carousel-caption">
                      <h1>Rastas Sinteticas</h1>
                      <p>No dañan el pelo natural</p>
                      <a href="#" class="btn btn-outline-success">COMPRAR</a>                    
                    </div>
                  </div>  
                @endforeach 
              </div>
      </div>
  </main>
</body>
</html>