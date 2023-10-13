<!DOCTYPE lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@webcomponents/webcomponentsjs@2.1.3/webcomponents-loader.js"></script> 

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <!-- Icon -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"/>
    <!-- icon -->

    <!-- Google fonts End -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- custon style Sheet & JavaScript -->
    <link rel="stylesheet" href="{{asset('assets/css/index.css')}}"/>
    <script src="{{asset('assets/js/index.js')}}" defer></script>
    <link rel="manifest" href="{{asset('assets/manifest.json')}}">
    <!-- custon style Sheet & JavaScript -->
    <title>LoveShop</title>
  </head>
@extends('layouts.app')

@section('content')
<body class="home">

    <!-- ===========Hero Section===================== -->

    <main class="hero-section">
      <div>
        <h1 class="fs-200 fs-poppins">
          Love Shop
          <span class="block lineheight fs-300 bold-900 big-wireless fs-poppins"
            >NEW</span
          ><span
            class="text-white fs-600  lineheight bold-bolder fs-poppins"
            >COLLECTION</span
          >
        </h1>
        <model-viewer src="{{asset('assets/modelos/all.gltf')}}" alt="A 3D model of a car" class="MODEL1" shadow-intensity="1" camera-controls auto-rotate ar >
        </model-viewer>
      </div>
      <div class="hero-inner flex">
        <div>
        </div>
        <div class="hero-info">
          
          <p class="fs-montserrat">
            Tu destino para encontrar productos de alta calidad y servicios excepcionales desde la comodidad de tu hogar.
          </p>
        </div>
      </div>
    </main>

    <!-- =================Product Section======================= -->

    <section class="product-section">
      <div class="category bg-yellow grid">
        <div>
          <h3 class="text-white fs-montserrat bold">
            Disfruta <span class="block fs-200 fs-poppins bold">La mejor
              </span
            ><span
              class="earphone uppercase fs-400 fs-montserrat bold-900 lineheight"
              >CALIDAD</span
            >
          </h3>

        </div>
        <div class="product-img2">
          <model-viewer src="{{asset('assets/modelos/scene2.gltf')}}" alt="A 3D model of a car" shadow-intensity="1" camera-controls auto-rotate ar >
          </model-viewer>
        </div>
      </div>
      <div class="category bg-red grid">
        <div>
          <h3 class="text-white fs-50 fs-montserrat bold">
            Accesorios<span class="block fs-200 fs-poppins bold">De</span
            ><span
              class="earphone uppercase fs-400 fs-poppins bold-900 lineheight"
              >Tendencia</span
            >
          </h3>

        </div>
        <div class="product-img3">
          <model-viewer src="{{asset('assets/modelos/bolsa.gltf')}}" alt="A 3D model of a car" shadow-intensity="1" camera-controls auto-rotate ar >
          </model-viewer>
        </div>
      </div>
      <div class="category bg-black grid">
        <div>
          <h3 class="text-white fs-50 fs-montserrat bold">
            Lo
            <span class="block fs-200 fs-poppins bold text-white">Mejor del</span
            ><span
              class="earphone uppercase fs-400 fs-poppins bold-900 lineheight"
              >Mercado</span
            >
          </h3>

        </div>
        <div class="product-img4">
          <model-viewer src="{{asset('assets/modelos/botas.gltf')}}" alt="A 3D model of a car" shadow-intensity="1" camera-controls auto-rotate ar >
          </model-viewer>
        </div>
      </div>
      
     
    </section>

    <!-- ========================================= -->
    <!-- =============Service section============== -->

    <section class="service-section">
      <div class="service">
        <img src="{{asset('assets/image/free.svg')}}" alt="" />
        <div class="service-info">
          <h3 class="fs-poppins fs-200">Envios gratis</h3>
          <p class="fs-montserrat fs-50">A toda la republica</p>
        </div>
      </div>
      <div class="service">
        <img src="{{asset('assets/image/sett.svg')}}" alt="" />
        <div class="service-info">
          <h3 class="fs-poppins fs-200">Envio seguro</h3>
          <p class="fs-montserrat fs-50">30 días de garantia</p>
        </div>
      </div>
      <div class="service">
        <img src="{{asset('assets/image/supt.svg')}}" alt="" />
        <div class="service-info">
          <h3 class="fs-poppins fs-200">Atención al cliente</h3>
          <p class="fs-montserrat fs-50">24/7</p>
        </div>
      </div>
      <div class="service">
        <img src="{{asset('assets/image/pay.svg')}}" alt="" />
        <div class="service-info">
          <h3 class="fs-poppins fs-200">Pagos seguros</h3>
          <p class="fs-montserrat fs-50">Cualquier tipo</p>
        </div>
      </div>
    </section>

    <!-- ===================Feature Section============= -->

    <section class="feature-section bg-red">
      <div class="feature-one grid">
        <img src="{{asset('assets/image/p-2.png')}}"  alt="" />
        <p class="text-gray uppercase">Descuentos</p>
        <p
          class="font-size lineheight fs-50 text-gray fs-poppins bold-800 uppercase"
        >
          hasta 20% <span class="smile"></span>
        </p>
        <p class="text-white fs-poppins fs-50">Hasta agotar existencias</p>
      </div>
      <div class="feature-info">
        
        <p class="fs-montserrat text-white fs-50">
          Nos esforzamos por ofrecer productos de la más alta calidad de marcas de renombre. Trabajamos estrechamente con nuestros proveedores para garantizar que cada artículo cumpla con nuestros estándares de calidad rigurosos.
        </p>
        <a href="./shop.html">
          <button class="prdduct-btn large-btn text-red bg-white fs-poppins">
            Comprar
          </button>
        </a>
        
      </div>
    </section>

    <footer>
      <!-- =============Brands================= -->
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

      <section class="copyRight">
        <p class="c-font fs-montserrat fs-200">
        © Kkotas Games. All rights reserved.
        </p>
        <p class="fs-montserrat fs-100 text-align p-top">
          Privacy Policy
        </p>
      </section>
    </footer>
  </body>
  @endsection
  	<!-- Loads <model-viewer> for modern browsers: -->
      <script type="module"
		  src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js">
	  </script>

	<!-- Loads <model-viewer> for old browsers like IE11: -->
	<script nomodule
      src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js">
	</script>
  
</html>


