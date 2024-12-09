<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Devil Fruit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    {{-- Inizio NavBar --}}
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <img class="logo" src="./media/apple.webp" alt="Vega logo">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav d-flex justify-content-center">
              <li class="nav-item">
                <a class="nav-link" href="{{route('Home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('Paramecia')}}">Paramecia</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{route('Zoan')}}">Zoan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('Logia')}}">Logia</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      {{-- Fine Navbar --}}
      {{-- Header --}}
      <div class="container-fluid p-3">
        <div class="row justify-content-center align-item-center">
            <div class="col-12 text-center">
                <h1 class="display-1"><strong>Zoan</strong></h1>
            </div>
        </div>
      </div>
      {{-- Fine Header --}}
      {{-- Inizio Card --}}
      <div class="min-vh-100">
        <div class="container">
          <div class="row justify-content-center align-items-center">
            @foreach ($cards as $card)
            <div class="col-12 col-md-4 d-flex justify-content-center mt-5">
              <div class="card" style="width: 18rem;">
                <img src="{{$card['img']}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$card['title']}}</h5>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      {{-- Fine Card --}}
      
      {{-- Footer --}}
      <footer class="bg-body-tertiary text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
          © 2020 Copyright:
          <a class="text-body" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
      </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>