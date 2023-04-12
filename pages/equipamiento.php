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
  <link rel="stylesheet" href="../assets/css/header.css">
  <link rel="stylesheet" href="../assets/css/subheader.css">
  <link rel="stylesheet" href="../assets/css/equipamiento-style.css">
  <link rel="stylesheet" href="../assets/icons/bootstrap-icons.css">
  <title>EQUIPAMIENTO</title>
</head>

<body>
  <?php
  echo $componentes->header();

  echo $componentes->subheader(
    "EQUIPAMIENTO",
    "En la sección de Equipamiento, presentamos 
        una selección de productos de alta calidad y ",
    " tecnología avanzada para mejorar la experiencia de los pasajeros y
        conductores en los vehículos de taxi.",
    " ",
    "../assets/img/taximetro.jpg"
  );
  ?>
  <!-- un cuadro de imagenes para todos los accesorios que tengan filtros -->

  <div class="row" id="myBtnContainer">
    <button class="btn active" onclick="filterSelection('all')"> Ver todo </button>
    <button class="btn" onclick="filterSelection('taximetro')"> Taximetro </button>
    <button class="btn" onclick="filterSelection('luminoso')"> Luminoso</button>
    <button class="btn" onclick="filterSelection('bucle-magnetica')"> Bucle Magnético</button>
    <button class="btn" onclick="filterSelection('accesorios')"> Accesorios</button>
  </div>

  <!-- Portfolio Gallery Grid -->
  <div class="row">
    <div class="column taximetro">
      <div class="content">
        <div class="img-equipamiento">
          <img src="../assets/img/TX80-El-Taller.jpg" alt="taximetro" style="width:250px; height: 100px ;">
        </div>
        <div class="tex-equipamiento">
          <h4>TX80 SkyGlass</h4>
          <p>Taxitronic's innovative taximeter with a Smart TD connection,
            integrated printer in the mirror, false bill detector,
            minimalist design, touch keypad, courtesy light, and easy
            installation.</p>
        </div>
      </div>
    </div>
    <div class="column taximetro">
      <div class="content">
        <div class="img-equipamiento">
          <img src="../assets/img/tx40.jpg" alt="taximetro" style="width:250px; height: 100px ;">
        </div>
        <div class="tex-equipamiento">
          <h4>TX40: </h4>
          <p>Un taxímetro compacto con tecnología avanzada, pantalla LED, control de tiempo opcional,
            conexión Bluetooth con Smart TD, cambio de tarifa automático y código antirrobo.</p>
        </div>

      </div>
    </div>
    <div class="column taximetro">
      <div class="content">
        <div class="img-equipamiento">
          <img src="../assets/img/tx52.jpg" alt="taximetro" style="width:250px; height: 100px ;">
        </div>
        <div class="tex-equipamiento">
          <h4>TX52: </h4>
          <p>Un taxímetro robusto y fiable con impresora integrada, sistema de carga fácil, control de tiempo opcional, conexión Bluetooth con Smart TD,
            cambio de tarifa automático y código antirrobo.</p>
        </div>
      </div>
    </div>
    <div class="column taximetro">
      <div class="content">
        <div class="img-equipamiento">
          <img src="../assets/img/TXD70.jpg" alt="taximetro" style="width:250px; height: 100px ;">
        </div>
        <div class="tex-equipamiento">
          <h4>TXD70: : </h4>
          <p>Taxímetro de tercera generación de Taxitronic con un potente procesador, módem de comunicación 3.5G, función manos libres,
            pantalla táctil de 6,5", módulo Bluetooth, navegador GPS Sygic, control del conductor en línea, lector de tarjetas privado y
            conexión Bluetooth con Smart TD.</p>
        </div>


      </div>
    </div>

    <div class="column luminoso">
      <div class="content">
        <div class="img-equipamiento">
        <img src="../assets/img/TL70B.jpg" alt="TL70B" style="width:250px; height: 100px ;">
        </div>
        <div class="tex-equipamiento">
        <h4>TL70B: </h4>
        <p>Módulo luminoso pequeño, ligero y con Bluetooth y GPS incorporados, para estar conectado a tu Radiotaxi.</p>
        </div>
        
      </div>
    </div>
    <div class="column luminoso">
      <div class="content">
        <div class="img-equipamiento">
          <img src="../assets/img/TL70B.jpg" alt="TL70B" style="width:250px; height: 100px ;">        
        </div>
        <div class="tex-equipamiento">
        <h4>Módulo luminoso Montero Morón: </h4>
        <p>Indicador electrónico digital homologado y de máxima resistencia mecánica y aerodinámica.</p>
        </div>
        
      </div>
    </div>
    <div class="column bucle-magnetica">
      <div class="content">
        <div class="img-equipamiento">
          <img src="../assets/img/bucleMagnetico.jpg" alt="bucleMagnetico" style="width:250px; height: 100px ;">
        </div>
        <div class="tex-equipamiento">
        <h4> Bucle Magnético</h4>
        <p>Mejoran la
          accesibilidad de pasajeros con capacidades auditivas diferentes. La nueva ordenanza del taxi
          en Madrid hace obligatoria su instalación en nuevos vehículos de transporte de pasajeros.</p>
       
        </div>
      </div>
    </div>
    <div class="column accesorios">
      <div class="content">
        <div class="img-equipamiento">
          <img src="../assets/img/Taxi-BG40.jpg" alt="Taxi-BG40" style="width:250px; height: 100px ;">
        </div>
        <div class="tex-equipamiento">
        <h4>Bluetooth GPS BG40:</h4>
        <p>Conectividad Bluetooth y GPS para integrar tu taxímetro con Smart TD.</p>
        </div>
      </div>
    </div>
    <div class="column accesorios">
      <div class="content">
        <div class="img-equipamiento">
          <img src="../assets/img/pin-pad.jpg" alt="pin-pad" style="width:250px; height: 100px ;">
        </div>
        <div class="tex-equipamiento">
        <h4>PIN PAD:</h4>
        <p>Dispositivo de pago con tarjeta para integrar con la aplicación Smart TD.</p>
        </div>
       
      </div>
    </div>
    <div class="column accesorios">
      <div class="content">
        <div class="img-equipamiento">
          <img src="../assets/img/Impresora-IR32.jpg" alt="Impresora-IR32" style="width:250px; height: 100px ;">
        </div>
        <div class="tex-equipamiento">
        <h4>Impresora IR32:</h4>
        <p>Impresora térmica de alta resolución y velocidad compatible con todos los taxímetros de Taxitronic.</p>
        </div>
        
      </div>
    </div>
    <div class="column accesorios">
      <div class="content">
        <div class="img-equipamiento">
          <img src="../assets/img/tc60e.jpg" alt="tc60e" style="width:250px; height: 100px ;">
        </div>
        <div class="tex-equipamiento">
        <h4>Equipo de Seguridad TC60E:</h4>
        <p>Equipo certificado para estar conectado a las centrales de alarmas 112 de Madrid, Galicia y Cataluña.</p>
        </div>
        
      </div>
    </div>
    <!-- END GRID -->
  </div>

  <script>
    filterSelection("all") // Execute the function and show all columns
    function filterSelection(c) {
      var x, i;
      x = document.getElementsByClassName("column");
      if (c == "all") c = "";
      // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
      for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
      }
    }

    // Show filtered elements
    function w3AddClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {
          element.className += " " + arr2[i];
        }
      }
    }

    // Hide elements that are not selected
    function w3RemoveClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
          arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
      }
      element.className = arr1.join(" ");
    }

    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
      });
    }
  </script>
  <script src="../assets/js/header.js"></script>
</body>

</html>