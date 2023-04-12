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
        
    </main>
    <?php
    echo $componentes->footer();
    ?>
    <script src="../assets/js/inicio_script.js"></script>
    <script src="../assets/js/header.js"></script>
    <script src="../assets/js/modal-hooks.js"></script>
</body>
</html>