<?php
require_once dirname(__FILE__)."/inc/i_top.php";

    $op       = $_GET['op'];

    // ECHO 'op='.$op.'<br>';
    
    switch ($op) {
    
        case '0': header("Location: home.php");     break;
        case '1': header("Location: empresa.php");  break;
        case '2': header("Location: produtos.php"); break;
        case '3': header("Location: servicos.php"); break;
        case '4': header("Location: contato.php");  break;      
            
    }
    
    $links = array('Home', 'Empresa', 'Produtos', 'Serviços', 'Contato');
    showNavBar($links);
    $msg = 'Todos os direitos reservados';
    showRodape($msg);