<?php session_start(); ?>
<!-- php Functions -->
<?php require('inc/functions/class-store.php'); ?>

<?php
    // Variables para los Productos 
    $id         = (isset($_GET['id'])           ? filter_var($_GET['id'],          FILTER_VALIDATE_INT) : null);
    $id_rubro   = (isset($_GET["id_rubro"])     ? filter_var($_GET["id_rubro"],    FILTER_VALIDATE_INT) : "");
    $id_subrubro = (isset($_GET["id_subrubro"]) ? filter_var($_GET["id_subrubro"], FILTER_VALIDATE_INT) : "");
    $id_grupo   = (isset($_GET["id_grupo"])     ? filter_var($_GET["id_grupo"],    FILTER_VALIDATE_INT) : "");
    $minamount  = (isset($_GET["minamount"])    ? filter_var(str_replace('$','',$_GET["minamount"]),   FILTER_VALIDATE_INT) : null);
    $maxamount  = (isset($_GET["maxamount"])    ? filter_var(str_replace('$','',$_GET["maxamount"]),   FILTER_VALIDATE_INT) : null);
    $order      = (isset($_GET['order'])        ? filter_var($_GET['order'],       FILTER_SANITIZE_STRING) : "");
    $page       = (isset($_GET["page"])         ? filter_var($_GET["page"],        FILTER_VALIDATE_INT) : 1);
    $search     = (isset($_GET['s'])            ? filter_var($_GET['s'],           FILTER_SANITIZE_STRING) : "");
    $opcion     = (isset($_GET['opcion'])       ? filter_var($_GET['opcion'],      FILTER_SANITIZE_STRING) : "");
    $limit      = 21; //Limito la busqueda
    $links      = 6; // limito los items a mostrar en el paginador
    $general = new Configuracion();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="Luciano Colmano y Fernando Catalano">
    <meta name="Robots" content="All">
    <meta name="Revisit-after" content="15 days">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/favicon.png">
    <title>Tienda Anubis | Bell Ville</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Google Captcha -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>

<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>