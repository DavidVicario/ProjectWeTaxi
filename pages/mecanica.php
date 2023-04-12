<?php
include_once '../includes/componentes.php';
$componentes = new componentes();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/mecanica_style.css">
  <link rel="stylesheet" href="../assets/css/subheader.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../assets/css/header.css">
  <link rel="stylesheet" href="../assets/css/footer.css">
  <title>MECÁNICA DEL AUTOMÓVIL</title>
</head>

<body>
  <?php
  echo $componentes->Header();

  echo $componentes->subheader(
    "TALLER",
    "Somos una empresa de taxis con taller autorizado para revisiones oficiales.",
    "Ofrecemos precios especiales para TAXI y tenemos ofertas nuevas cada mes.",
    "Además, ofrecemos servicios como: ",
    "../assets/img/neumaticos.jpg"
  );
  ?>

  <!--menu acordeon-->
  <div class="acordeon">
    <div class="item ">
      <div class="header-item">
        <div class="icon-title">
          <img class="icon" src="../assets/iconos/tyre_86126.svg" alt="Mi icono">
          <p class="text">Neumáticos</p>
        </div>
        <div class="svg">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
      </div>
      <!--INFORMACION div para cada uno IMG+TEXTO+BOTONES -->
      <div class="body-item " style="display: none;">
        <div class="item-contenido">
          <div class="img-menu-acordeon">
            <img src="../assets/img/neumaticos.jpg" alt="Neumáticos">
          </div>
          <div class="texto-menu-acordeon">
            <p>
              WETAXI enfatiza la importancia de mantener los neumáticos en buen estado para garantizar
              la seguridad en carretera. Es recomendable revisar la presión y profundidad del dibujo
              de las ruedas. Estas revisiones periódicas en talleres especializados ayudan a prevenir el desgaste
              prematuro, mejorar el consumo de combustible y proteger el medio ambiente.

            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="item ">
      <div class="header-item">
        <div class="icon-title">
          <img class="icon" src="../assets/iconos/iconfinder-wiper-clean-service-labor-4622491_122432.svg" alt="Mi icono">
          <p class="text">Limpieza </p>
        </div>
        <div class="svg">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
      </div>
      <!--INFORMACION div para cada uno IMG+TEXTO+BOTONES -->
      <div class="body-item" style="display: none;">
        <div class="item-contenido">
          <div class="img-menu-acordeon">
            <img src="limpieza-exterior.jpg" alt="Limpieza exterior">
          </div>
          <div class="texto-menu-acordeon">
            <p>
              Con nuestro servicio de limpieza exterior, te garantizamos que tu vehículo quedará como el primer día.
              Limpieza a fondo de carrocería, llantas y cristales para que brille con luz propia.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="item ">
      <div class="header-item">
        <div class="icon-title">
          <img class="icon" src="../assets/iconos/voltmeter_electricity_tool_icon_221330.svg" alt="Mi icono">
          <p class="text">Electricidad</p>
        </div>
        <div class="svg">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
      </div>
      <!--INFORMACION div para cada uno IMG+TEXTO+BOTONES -->
      <div class="body-item" style="display: none;">
        <div class="item-contenido">
          <div class="img-menu-acordeon">
            <img src="electricidad.jpg" alt="Electricidad">
          </div>
          <div class="texto-menu-acordeon">
            <p>
              ¿Tienes algún problema eléctrico en tu vehículo? En WETAXI MADRID, te ofrecemos un servicio integral de
              reparación de problemas eléctricos para que no te quedes nunca tirado.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="header-item">
        <div class="icon-title">
          <img class="icon" src="../assets/iconos/screwdriver_wrench_icon_198514.svg" alt="Mi icono">
          <p class="text">Mantenimiento y revisión</p>
        </div>
        <div class="svg">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
      </div>
      <!--INFORMACION div para cada uno IMG+TEXTO+BOTONES -->
      <div class="body-item" style="display: none;">
        <div class="item-contenido">
          <div class="img-menu-acordeon">
            <img src="mantenimineto-integral2.jpg" alt="Mantenimiento y revisión">
          </div>
          <div class="texto-menu-acordeon">
            <p>
              En WETAXI MADRID, realizamos todo tipo de mantenimiento y revisión de vehículos para que siempre puedas
              conducir con total seguridad y confianza en tu coche.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="item ">
      <div class="header-item">
        <div class="icon-title">
          <img class="icon" src="../assets/iconos/oil_icon_135343.svg" alt="Mi icono">
          <p class="text">Cambio de aceite y filtros</p>
        </div>
        <div class="svg">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
      </div>
      <!--INFORMACION div para cada uno IMG+TEXTO+BOTONES -->
      <div class="body-item" style="display: none;">
        <div class="item-contenido">
          <div class="img-menu-acordeon">
            <img src="aceiite-filtro.jpg" alt="Cambio de aceite y filtros">
          </div>
          <div class="texto-menu-acordeon">
            <p>
              Un buen mantenimiento del motor es imprescindible para el correcto funcionamiento de tu vehículo.
              En WETAXI MADRID, te ofrecemos el servicio de cambio de aceite y filtros para mantener tu coche en perfectas condiciones
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="item ">
      <div class="header-item">
        <div class="icon-title">
          <img class="icon" src="../assets/iconos/fuel_lpg_station_icon_180145.svg" alt="Mi icono">
          <p class="text">Transformación a GLP</p>
        </div>
        <div class="svg">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
      </div>
      <!--INFORMACION div para cada uno IMG+TEXTO+BOTONES -->
      <div class="body-item" style="display: none;">
        <div class="item-contenido">
          <div class="img-menu-acordeon">
            <img src="glp.jpg" alt="Transformación a GLP">
          </div>
          <div class="texto-menu-acordeon">
            <p>
              En WETAXI MADRID tenemos técnicos profesionales que pueden adaptar vehículos de Gasolina a Autogas GLP
              que incorporen motores de INYECCIÓN INDIRECTA o de INYECCIÓN DIRECTA, tanto para uso particular como
              profesional que cumplan con los parámetros y requisitos que la normativa española exige para permitir
              la transformación de vehículos propulsados por Gasolina a Autogas GLP.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div> <!--Fin  menu acordeon-->
  <script>
    // Obtener todos los elementos con la clase header-item
    const headerItems = document.querySelectorAll('.header-item');

    // Iterar sobre cada elemento y agregar un evento de click
    headerItems.forEach((headerItem) => {
      headerItem.addEventListener('click', () => {
        // Obtener el elemento padre con la clase item
        const item = headerItem.parentNode;

        // Obtener el body-item correspondiente
        const bodyItem = item.querySelector('.body-item');

        // Alternar la clase open en el elemento item
        item.classList.toggle('open');

        // Mostrar u ocultar el body-item utilizando la propiedad display
        if (bodyItem.style.display === 'block') {
          bodyItem.style.display = 'none';
        } else {
          bodyItem.style.display = 'block';
        }
      });
    });
  </script>
  <script src="../assets/js/header.js"></script>



</body>

</html>