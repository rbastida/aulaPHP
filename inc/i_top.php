<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title><?php echo $title; ?></title>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="//code.jquery.com/jquery.js"></script>    
    
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>    
    </head>

<?php
$basedir = dirname(__FILE__);
//require_once($basedir . '/i_header.php');
require_once($basedir . '/i_body.php');

// classe para acesso/criação de usuário
//require_once($basedir . 'inc/DAO/UsuarioDAO.php');

function isAdmin() {
    $objUsr = Usuario::getInstance();
    $ret = ($objUsr->getPerfil() == AppConf::PERF_ADM);
    return $ret;
}

function verificaSessao() {
    $objUsr = Usuario::getInstance();
    $id = $objUsr->getId();
    if ($id == 0) {
        ob_clean();
        header('Location:' . Util::getFullUrl('login.php?msg=se'));
        ob_flush();
        exit();
    }
}

function isUsuario() {
    $objUsr = Usuario::getInstance();
    $ret = ($objUsr->getPerfil() == AppConf::PERF_USR);
    return $ret;
}

function isAutenticado() {
    $ret = ((isUsuario())||(isAdmin()));
    return $ret;
}

function checkAuth($thisPage='') {
    if (!isAutenticado()) {
        header("location:login.php?msg=se");
        exit();
    }
}
?>  
