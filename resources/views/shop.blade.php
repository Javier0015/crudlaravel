<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('assets/estilo.css')}}" />
    <script src="{{asset('assets/app.js')}}" defer></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"/>

    <!-- Icon -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <!-- icon -->

    <!-- Google fonts End -->

    <!-- custon style Sheet & JavaScript -->
    <link rel="stylesheet" href="{{asset('assets/css/shop.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/index.css')}}" />
    <script src="{{asset('assets/js/index.js')}}" defer></script>
    <script src="{{asset('assets/js/shop.js')}}" defer></script>
  
    <!-- custon style Sheet & JavaScript -->
    <title>Tienda</title>
  </head>
  <body class="home">
   

  @extends('layouts.app')

@section('content')
    <!-- ===================Section 2---------------------- -->

   

    <main class="shop-main-container grid">
      <!-- -------------------Inner Section=============== -->

      <div>

        <!-- ---------------End----Inner Section=============== -->

        <!-- ==============Shop-product====================== -->

        <section class="contenedor">
          <!-- Contenedor de elementos -->
          <div class="contenedor-items">
              <div class="item">
                  <span class="titulo-item">Blusa</span>
                  <img src="{{asset('assets/img/boxengasse.png')}}" alt="" class="img-item">
                  <span class="precio-item">$150</span>
                  <button class="boton-item">Agregar al Carrito</button>
              </div>
              <div class="item">
                  <span class="titulo-item">Playera</span>
                  <img src="{{asset('assets/img/englishrose.png')}}" alt="" class="img-item">
                  <span class="precio-item">$250</span>
                  <button class="boton-item">Agregar al Carrito</button>
              </div>
              <div class="item">
                  <span class="titulo-item">Camisa</span>
                  <img src="{{asset('assets/img/knocknap.png')}}" alt="" class="img-item">
                  <span class="precio-item">$350</span>
                  <button class="boton-item">Agregar al Carrito</button>
              </div>
              <div class="item">
                  <span class="titulo-item">Gorra</span>
                  <img src="{{asset('assets/img/lanight.png')}}" alt="" class="img-item">
                  <span class="precio-item">$180</span>
                  <button class="boton-item">Agregar al Carrito</button>
              </div>
              <div class="item">
                  <span class="titulo-item">Tenis</span>
                  <img src="{{asset('assets/img/silverall.png')}}" alt="" class="img-item">
                  <span class="precio-item">$320</span>
                  <button class="boton-item">Agregar al Carrito</button>
              </div>
              <div class="item">
                  <span class="titulo-item">Falda</span>
                  <img src="{{asset('assets/img/skinglam.png')}}" alt="" class="img-item">
                  <span class="precio-item">$180</span>
                  <button class="boton-item">Agregar al Carrito</button>
              </div>
              <div class="item">
                  <span class="titulo-item">Vestido</span>
                  <img src="{{asset('assets/img/midimix.png')}}" alt="" class="img-item">

                  <span class="precio-item">$540</span>
                  <button class="boton-item">Agregar al Carrito</button>
              </div>
              <div class="item">
                  <span class="titulo-item">Sueter</span>}
                  <img src="{{asset('assets/img/sirblue.png')}}" alt="" class="img-item">
                  <span class="precio-item">$320</span>
                  <button class="boton-item">Agregar al Carrito</button>
              </div>

          </div>
          <!-- Carrito de Compras -->
          <div class="carrito" id="carrito">
              <div class="header-carrito">
                  <h2>Tu Carrito</h2>
              </div>
  
              <div class="carrito-items">
                  
                  
              <div class="carrito-total">
                  <div class="fila">
                      <strong>Tu Total</strong>
                      <span class="carrito-precio-total">
                          $120
                      </span>
                  </div>
                  <button class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i> </button>
              </div>
          </div>
      </section>



    <!-- =====================Footer Section================ -->

    <footer>

    <section class="brands grid">
        <div>
          <img src="{{asset('assets/image/br-1.png')}}" alt="" width="113" height="auto" />
        </div>
        <div>
          <img src="{{asset('assets/image/br-2.svg')}}" alt="" width="113" height="auto" />
        </div>
        <div>
          <img src="{{asset('assets/image/br-3.svg')}}" width="113" height="auto" alt="" />
        </div>
        <div>
          <img src="{{asset('assets/image/br-4.png')}}" width="113" height="auto" alt=""  />
        </div>
        <div>
          <img src="{{asset('assets/image/br-5.png')}}" width="113" height="auto" alt=""  />
        </div>
      </section>
    
    <!-- =============Footer Menu=================== -->
    <section class="footer grid" >
      <div class="footer-logo grid">
      <img src="{{asset('assets/image/logo.png')}}" alt="" />
       
        <div class="social-media flex">
          <i class="uil uil-facebook-f"></i>
          <i class="uil uil-instagram"></i>
          <i class="uil uil-linkedin"></i>
          <i class="uil uil-twitter"></i>
        </div>
      </div>

      <div class="emails grid">
        <h3 ></h3>
        <p style="text-align: center;" class="updates fs-montserrat fs-300 fs-800">
          Tu estilo, tu elección, tu tienda en línea.
        </p>
        <div class="inputField flex ">
         

        </div>
      </div>
    </section>
    
     <section class="copyRight">
      <p class="c-font fs-montserrat fs-200">© Kkotas Games. All rights reserved.</p>
      <p class="fs-montserrat fs-100 text-align p-top">Privacy Policy . Term Condition</p>
     </section>
    
      </footer>
  </body>
  @endsection
</html>
