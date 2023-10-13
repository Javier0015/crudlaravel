<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"/>

    <!-- Icon -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"/>
    <!-- icon -->

    <!-- Google fonts End -->

    <!-- custon style Sheet & JavaScript -->
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/shop.css" />
    <link rel="stylesheet" href="css/blog.css" />
    <link rel="stylesheet" href="css/cart.css" />
    <script src="js/index.js" defer></script>
    <!-- custon style Sheet & JavaScript -->
    <title>Ventas</title>
  </head>
  <body class="home">
    <header class="primary-header container flex">
      <div class="header-inner-one flex">
        <div class="logo">
          <img src="image/logo.png" alt=""  style="width: 150px; padding: auto;"/>
        </div>
        <button
          class="mobile-close-btn"
          data-visible="false"
          aria-controls="primary-navigation"
        >
          <i class="uil uil-times-circle"></i>
        </button>
        <nav>
          <ul
            id="primary-navigation"
            data-visible="false"
            class="primary-navigation flex"
          >
            <li>
              <a class="fs-100 fs-montserrat bold-500" href="index.html"
                >Inicio</a
              >
            </li>
            <li>
              <a class="fs-100 fs-montserrat bold-500" href="shop.html"
                >Tienda</a
              >
            </li>
            <li>
              <a class="fs-100 fs-montserrat bold-500" href="about.html"
                >Nosotros</a
              >
            </li>

            <li>
              <a class="fs-100 fs-montserrat bold-500 active" href="cart.html"
                >Ventas</a
              >
            </li>
          </ul>
        </nav>
      </div>

      <div class="header-login flex">
        <a style="text-decoration: none;" class="fs-100 fs-montserrat text-black bold-500" href="./Login/index.html">Iniciar sesión</a>
        

      </div>
      <div class="mobile-open-btn"><i class="uil uil-align-right"></i></div>
    </header>
    <!-- ===============================Cart Section=================== -->

    <section class="table">
      <table>
        <thead class="thead fs-poppins text-black bold-700 bg-very-light-gray">
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><i class="uil uil-times"></i></td>
            <td><i class="uil uil-user-circle"></i></td>
            <td></td>
            <td>$</td>
            <td><input type="number" min="0" max="10" /></td>
            <td></td>
          </tr>
          <tr>
            <td><i class="uil uil-times"></i></td>
            <td><i class="uil uil-user-circle"></i></td>
            <td></td>
            <td></td>
            <td><input type="number" min="0" max="10" /></td>
            <td></td>
          </tr>
          <tr>
            <td><i class="uil uil-times"></i></td>
            <td><i class="uil uil-user-circle"></i></td>
            <td></td>
            <td></td>
            <td><input type="number" min="0" max="10" /></td>
            <td></td>
          </tr>
        </tbody>
      </table>

      <div class="copen-box flex">
        <div>
            <input class="copen-input fs-poppins text-black" type="text">
            <button class="cupen-btn fs-poppins bold-700 text-black"></button>
        </div>
        <div>
            <button class="cupen-btn fs-poppins bold-700 text-black"></button>
        </div>
    </div>
      
    </section>

    <section class="check-out grid">

        <div>

        </div>
        <div>
        <h3 class="fs-poppins fs-300 text-black bold-700"></h3>

        <table>
            <thead class="thead fs-poppins text-black bold-700">
              <tr>
                <td class="bg-very-light-gray"></td>
                <td></td>
              </tr>
            </thead>
            <thead class="thead fs-poppins text-black bold-700">
              <tr>
                <td class="bg-very-light-gray"></td>
                <td class="bold-700"></td>
              </tr>
            </thead>
            <tbody>
            </table>
            <div class="grid">
                <button class="fs-poppins text-black bold-800 fs-300 bg-gray"></button>
            </div>
        </div>

    </section>

    <!-- ===============================Cart Section=================== -->

    <footer>
      <!-- =============Brands================= -->
      <section class="brands grid">
        <div>
          <img src="image/br-1.webp" alt="" width="113" height="auto" />
        </div>
        <div>
          <img src="image/br-2.svg" alt="" width="113" height="auto" />
        </div>
        <div>
          <img src="image/br-3.svg" width="113" height="auto" alt="" />
        </div>
        <div>
          <img src="image/br-4.png" width="113" height="auto" alt=""  />
        </div>
        <div>
          <img src="image/br-5.png" width="113" height="auto" alt=""  />
        </div>
      </section>

      <!-- =============Footer Menu=================== -->
      <section class="footer grid">
        <div class="footer-logo grid">
          <img src="image/logo.png" alt="" />
         
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
          © 2022 LoveShop. All rights reserved.
        </p>
        <p class="fs-montserrat fs-100 text-align p-top">
          Privacy Policy
        </p>
      </section>
    </footer>
  </body>
</html>
