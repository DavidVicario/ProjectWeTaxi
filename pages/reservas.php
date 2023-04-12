<?php
    require_once '../includes/componentes.php';
    $componentes = new componentes();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/reservas.css">
    <title>Document</title>
</head>
<body>
    <?php
        echo $componentes -> Header();
    ?>
    
    <main>
        <section class="module-container">
            <h1>Reserva ya tu cita</h1>
            <div class="reservas-container">
                <div class="lista-reservas-container">
                    <div class="lista-reservas">
                        <a href="" class="opcion-reserva">
                            Cambio de tarifa
                        </a>
                        <a href="" class="opcion-reserva">
                            Mecanica
                        </a>
                        <a href="" class="opcion-reserva">
                            Accesorios
                        </a>
                        <a href="" class="opcion-reserva">
                            Limpieza
                        </a>
                    </div>
                </div>
                <div class="descripcion-reservas-container">
                    <div class="seleccion-tipo-reserva">
                        <select name="" id="">
                            <option value="">Cambio de tarifa</option>
                            <option value="">Mecanica</option>
                            <option value="">Accesorios</option>
                            <option value="">Limpieza</option>
                        </select>
                    </div>
                    <div class="descripcion-reserva">
                        <div class="img-reserva">
                            <img src="../assets/img/taxis.png" alt="">
                        </div>
                        <div class="descripcion-reserva">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur earum consequuntur quas est odio labore laboriosam a vero, omnis natus quaerat repellendus inventore quis praesentium itaque. Distinctio ex cupiditate eius?
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php
        echo $componentes -> Footer();
    ?>
    <script src="../assets/js/header.js"></script>
</body>
</html>