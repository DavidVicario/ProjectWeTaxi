<?php

include_once '../includes/componentes.php';
include_once '../includes/modals-components.php';
$componentes = new componentes();
$modals = new modals();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../assets/css/inicio_style.css">
  <link rel="stylesheet" href="../assets/css/header.css">
  <link rel="stylesheet" href="../assets/css/footer.css">
  <link rel="stylesheet" href="../assets/icons/bootstrap-icons.css">
  <link rel="stylesheet" href="../assets/css/general.css">
  <link rel="stylesheet" href="../assets/css/form-style.css">
</head>

<body>
  
  <?php
  echo $modals->LoginModal();
  echo $modals->RegisterModal();
  echo $componentes->header();
  ?>
  <main>
    <section class="containerSlider">
      <div class="information-container">
        <div class="information">
          <div class="information-buttons">
            <div class="information-button">
              <button onclick="goToSlide(1)" class="slide-button">Button 1</button>
            </div>
            <div class="information-button">
              <button onclick="goToSlide(2)" class="slide-button">Button 2</button>
            </div>
            <div class="information-button">
              <button onclick="goToSlide(3)" class="slide-button">Button 3</button>
            </div>
          </div>
          <div class="information-body">
            <div class="information-body-text">
              <h2 id="slider-header">
                Esto es un titulo de lo mas importante
              </h2>
              <p id="slider-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.
              </p>
            </div>
            <div class="information-body-buttons">
              <a href="#" class="information-button" id="slider-anchor" >Saber mas</a> 
            </div>
          </div>
        </div>
      </div>
      <div class="sliderWrapper" id="sliderWrapper">
        <div class="sliderCaption" id="slide-1">
          <img class="sliderImg" src="../assets/img/inicio-slider-1.jpeg" alt="slider1">
        </div>
        <div class="sliderCaption" id="slide-2">
          <img class="sliderImg" src="../assets/img/inicio-slider-2.jpg" alt="slider2">
        </div>
        <div class="sliderCaption" id="slide-3">
          <img class="sliderImg" src="../assets/img/inicio-slider-3.jpg" alt="slider3">
        </div>
      </div>
    </section>
    <section class="servicios-section">
      <h2>Servicios</h2>
      <div class="services-container">
        <div class="service-container">
          <div class="service">
            <div class="service-img">
              <img src="../assets/img/taller-taxis-.jpg" alt="escuela">
            </div>
            <div class="service-description">
              <h3>Escuela de conductores</h3>
              <p>Disponemos del espacio perfecto para desarrollar nuestros cursos. También en idioma Urdu e Inglés.</p>
              <a href="#">Saber mas</a>
            </div>
          </div>
        </div>
        <div class="service-container">
          <div class="service">
            <div class="service-img">
              <img src="../assets/img/taxis.png" alt="bucle">
            </div>
            <div class="service-description">
              <h3>Equipamiento</h3>
              <p>En esta sección, presentamos los equipos y accesorios que ofrecemos para mejorar
                la experiencia de nuestros clientes durante el servicio de taxi.</p>
              <a href="#">Saber mas</a>
            </div>
          </div>
        </div>
        <div class="service-container">
          <div class="service">
            <div class="service-img">
              <img src="../assets/img/taxis.png" alt="asesoria">
            </div>
            <div class="service-description">
              <h3>Asesoria</h3>
              <p>En WETAXI MADRID disponemos de un departamento especializado para que no tengas que preocuparte de nada.</p>
              <a href="#">Saber mas</a>
            </div>
          </div>
        </div>
        <div class="service-container">
          <div class="service">
            <div class="service-img">
              <img src="../assets/img/taxis.png" alt="taller">
            </div>
            <div class="service-description">
              <h3>Taller</h3>
              <p>Ofrecemos precios especiales para TAXI y tenemos ofertas nuevas cada mes.</p>
              <a href="#">Saber mas</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="freenow-section">
      <!-- Zona Free Now con link de descarga de app -->
      <div class="freenow-container">
        <div class="freenow-img">
          <img src="../assets/img/freenow-inicio2.png" alt="freenow">
        </div>
        <div class="freenow-description">
          <p>WeTaxi Madrid y Free Now ofrecen servicios de mantenimiento y reparación de vehículos con descuentos para taxistas
            de Madrid de Free Now con categoría "Bronce" o superior.
            <br><br>Además, los conductores pueden obtener descuentos en reparación de taxímetros y luminosos, y se premiará a los 50
            mejores taxistas de la flota Free Now.
          </p>
          <div class="freenow-link">
            <a href="https://play.google.com/store/apps/details?id=taxi.android.client&hl=es&gl=US" target="_blank" class="freenow-link-btn">
              <i class="bi bi-google-play"></i>
              <div class="freenow-link-text">
                <span>Descargar en</span>
                <h5>Google Play</h5>
              </div>
            </a>
            <a href="https://apps.apple.com/us/app/free-now-mytaxi/id357852748" target="_blank" class="freenow-link-btn">
              <i class="bi bi-apple"></i>
              <div class="freenow-link-text">
                <span>Descargar en</span>
                <h5>App Store</h5>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="formulario-contacto-section">
      <!-- datos del formulario nombre apellidos email telefono y mensaje -->
      <div class="formulario-contacto-container">
        <h2>Ponte en contacto</h2>
        <form action="" method="">
          <div class="input-container">
            <input type="text" name="nombre" id="nombre" placeholder=" ">
            <label for="nombre">Nombre</label>
          </div>
          <div class="input-container">
            <input type="text" name="apellidos" id="apellidos" placeholder=" ">
            <label for="apellidos">Apellidos</label>
          </div>
          <div class="input-container">
            <input type="email" name="email" id="email" placeholder=" ">
            <label for="email">Email</label>
          </div>
          <div class="input-container">
            <input type="text" name="telefono" id="telefono" placeholder=" ">
            <label for="telefono">Telefono</label>
          </div>
          <div class="input-container">
            <textarea name="mensaje" id="mensaje" cols="30" rows="10" placeholder=" "></textarea>
            <label for="mensaje">Mensaje</label>
          </div>
          <div class="input-container">
            <input type="submit" value="Enviar">
          </div>
        </form>
      </div>
      <div class="datos-contacto-container">
        <div class="datos-contacto">
          <div class="datos-contacto-item">
            <div class="datos-contacto-icon">
              <i class="bi bi-telephone"></i>
            </div>
            <div class="datos-contacto-description">
              <h3>Telefono</h3>
              <p>91.141.2826</p>
            </div>
          </div>
          <div class="datos-contacto-item">
            <div class="datos-contacto-icon">
              <i class="bi bi-whatsapp"></i>
            </div>
            <div class="datos-contacto-description">
              <h3>Whatsapp</h3>
              <p>679.823.295</p>
            </div>
          </div>
          <div class="datos-contacto-item">
            <div class="datos-contacto-icon">
              <i class="bi bi-envelope"></i>
            </div>
            <div class="datos-contacto-description">
              <h3>Email</h3>
              <p>info@wetaximadrid.com</p>
            </div>
          </div>
          <div class="datos-contacto-item">
            <div class="datos-contacto-icon">
              <i class="bi bi-geo"></i>
            </div>
            <div class="datos-contacto-description">
              <h3>Ubicacion</h3>
              <p>Isaac Jiménez, 5 28037 Madrid</p>
            </div>
          </div>
        </div>
    </section>
  </main>
  <?php
  echo $componentes->footer();
  ?>
  <script src="../assets/js/inicio_script.js"></script>
  <script src="../assets/js/header.js"></script>
  <script src="../assets/js/modal-hooks.js"></script>
</body>
</html>