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
    <link rel="stylesheet" href="../assets/css/asesoria-style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>ASESORÍA</title>
</head>
<body>
    <?php
        echo $componentes->header();
    ?>
       
    <?php
        echo $componentes ->subheader("ASESORÍA","¿Necesitas ayuda con tu licencia de Auto- taxi?",
        "En WETAXI MADRID disponemos de un departamento especializado para que no tengas que preocuparte de nada. ",
        "Departamento labora, fiscal y administarivo, para cubrir todas las necesidades como autónomo o empresa. ", "../assets/img/asesoria.jpg");
    ?>

    <div class="row">
        <div class="column">
            <div class="card">
                <div class="icono-asesoria-container">
                    <div class="icono-asesoria">
                        <i class="bi bi-bank"></i>
                    </div>
                </div>
                <div class="texto-asesoria">
                    <h3>Departamento Fiscal:</h3>
                    <ul>
                        <li>Asesoramiento y gestión en impuestos y declaraciones (IVA, IRPF, Impuesto de Sociedades, etc.)</li>
                        <li>Contabilización y registro de facturas recibidas y emitidas</li>
                        <li>Declaraciones informativas y resúmenes anuales de IVA y operaciones con terceros</li>
                        <li>Asistencia a requerimientos de la agencia tributaria</li>
                        <li>Gestión del impuesto de Sociedades</li>
                        <li>Declaraciones trimestrales y anuales del IRPF e IVA</li>
                    </ul>
                </div>
                
            </div>
        </div>
        <div class="column">
            <div class="card">
                <div class="icono-asesoria-container">
                    <div class="icono-asesoria">
                        <i class="bi bi-person-vcard"></i>
                    </div>
                </div>
                <div class="texto-asesoria">
                    <h3>Departamento Laboral:</h3>
                    <ul>
                        <li>Trámites administrativos (inscripciones de empresa, altas y bajas en la seguridad social, etc.)</li>
                        <li>Contratos de trabajo, nóminas y seguros sociales de los trabajadores</li>
                        <li>Estudio y tramitación de subvenciones a la contratación</li>
                        <li>Prevención riesgos laborales</li>
                        <li>Tramitación de permisos (bajas por maternidad/paternidad, incapacidad temporal, etc.)</li>
                        
                    </ul>
                </div>
                
            </div>
        </div>
        <div class="column">
            <div class="card">
                <div class="icono-asesoria-container">
                    <div class="icono-asesoria">
                        <i class="bi bi-clipboard-check"></i>
                    </div>
                </div>
                <h3>Trámites Administrativos:</h3>
                <ul>
                    <li>Matriculaciones, transferencias, sustituciones y tarjetas de transporte de vehículos</li>
                    <li>Impuestos municipales y de transmisiones patrimoniales</li>
                    <li>Confección y presentación de retenciones y resumen anual</li>
                    <li>Transmisiones de licencias</li>
                    <li>Revista Municipal</li>
                </ul>
            </div>
        </div>
        
    </div>
    <script src="../assets/js/header.js"></script>
</body>
</html>