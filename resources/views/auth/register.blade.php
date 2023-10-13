<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ffec4ec2ed.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('assets/Login/style.css')}}" />

    <title>Login</title>
  </head>
  <body class="">
  @extends('layouts.app')
  @section('content')
      <section>
        <div class="row g-0">
            <div class="col-lg-7 d-none d-lg-block">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item img-1 min-vh-100 active">
                        <div class="carousel-caption d-none d-md-block">
                          <h5 class="font-weight-bold" style="display: flex;
                          align-items: center;
                          justify-content: center;
                          background-color: rgba(44, 46, 46, 0.644);
                          border-radius: 10px;
                          height: 30px; /* Ajusta la altura según tus necesidades */
                          text-align: center;">La mejor calidad del mercado está aquí </h5>
                        </div>
                      </div>
                      <div class="carousel-item img-2 min-vh-100">
                        <div class="carousel-caption d-none d-md-block">
                          <h5 class="font-weight-bold" style="display: flex;
                          align-items: center;
                          justify-content: center;
                          background-color: rgba(44, 46, 46, 0.644);
                          border-radius: 10px;
                          height: 30px; /* Ajusta la altura según tus necesidades */
                          text-align: center;">Descubre todo lo que tenemos para ti  </h5>
                         
                        </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>
            <div class="col-lg-5 bg-dark d-flex flex-column align-items-end min-vh-100">
                <div class="px-lg-5 pt-lg-4 pb-lg-3 p-4 mb-auto w-100">
                    
                </div>
                <div class="align-self-center w-100 px-lg-5 py-lg-4 p-4">
                <h3 class="font-weight-bold mb-4">Bienvenido</h3>






                <form class="mb-5" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-2">
                      <label for="name" class="form-label font-weight-bold">Nombre</label>
                      <input id="name" type="text" class="form-control  border-0 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                      @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="mb-4">
                      <label for="email" class="form-label font-weight-bold">Correo</label>
                      <input  id="email" type="email" class="form-control  border-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                      @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="mb-4">
                      <label for="password" class="form-label font-weight-bold">Contraseña</label>
                      <input id="password" type="password" class="form-control  border-0 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                      @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="mb-4">
                      <label for="password-confirm" class="form-label font-weight-bold">Confirma tu contraseña</label>
                      <input id="password-confirm" type="password" class="form-control border-0 " name="password_confirmation" required autocomplete="new-password">
                      @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Iniciar sesión</button>
                  </form>
                </div>
            </div>
        </div>
      </section>
      @endsection 
    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>