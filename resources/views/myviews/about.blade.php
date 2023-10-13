<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <!-- Icon -->
    <link
      rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"/>
    <!-- icon -->

    <!-- Google fonts End -->

    <!-- custon style Sheet & JavaScript -->
    <link rel="stylesheet" href="{{asset('assets/css/shop.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/index.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/about.css')}}">
    <script src="js/index.js" defer></script>
    <script src="js/shop.js" defer></script>
    <!-- custon style Sheet & JavaScript -->
    <title>Nosotros</title>
  </head>
  @extends('layouts.app')
  @section('content')
  
  <body class="home">



   <section class="about-section grid">
       <div>
        <video width="640" height="360" ccontrols autoplay muted>
          <source  src="{{asset('assets/image/logo.mp4')}}" type="video/mp4" >
      </video>
       </div>
       <div class="about-info">
           <h3 class="fs-poppins fs-200 text-red">Bienvenido</h3>
           <h1 class="fs-poppins fs-500 text-black">¿Quienes somos?</h1>
           <p class="fs-montserrat fs-100" style="text-align: justify;">Inspirar y empoderar relaciones amorosas saludables y vibrantes. Lo hacemos ofreciendo una cuidadosa selección de productos y recursos diseñados para enriquecer la intimidad y la conexión emocional. En cada paso de nuestro viaje, nos hemos mantenido fieles a nuestros valores fundamentales de amor, respeto y satisfacción del cliente.</p>
            <div class="about-btn">
               
              </div>
              <a href="{{ url('/shop') }}">
                <button class="large-btn bg-red text-white fs-poppins fs-50">Comprar</button>
              </a>
       </div>
   </section>




    <!-- ========================About Section========================== -->




     <!-- =====================Footer Section================ -->

    
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
      <section class="footer grid">
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


    </body>
  <section class="copyRight" >
        <p class="c-font fs-montserrat fs-200">
          © Kkotas Games. All rights reserved.
        </p>
        <p class="fs-montserrat fs-100 text-align p-top">
          Privacy Policy
        </p>
      </section>
    </footer>

</html>

@endsection