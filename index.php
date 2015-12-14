<?php
require_once dirname(__FILE__)."/inc/i_top.php";
//require_once './inc/conexao.php';

if ($_POST['submitted']) {

    $nome     = $_POST['nome'];
    $assunto  = $_POST['assunto'];
    $email    = $_POST['email'];
    $mensagem = $_POST['mensagem'];
    
    echo '<b>Dados Enviados com Sucesso:<br><br></b>';
    
    if (isset($nome)) {
        echo 'Campo Nome: &nbsp;'.$nome.'<br>';
    }
    
    if (isset($assunto)) {
        echo 'Campo Assunto:  &nbsp;'.$assunto.'<br>';
    }
    
    if (isset($email)) {
        echo 'Campo Email:  &nbsp;'.$email.'<br>';
    }
    
    if (isset($mensagem)) {
        echo 'Campo Mensagem:  &nbsp;'.$mensagem.'<br>';
    }
    
//    echo 'Dados retornados pelo Form foram:<br>';
//    echo 'Dados retornados pelo Form foram:<br>';
//    echo 'Dados retornados pelo Form foram:<br>';
//    echo 'Dados retornados pelo Form foram:<br>';
    
    
} else {
    
    $links = array('Home', 'Empresa', 'Produtos', 'Serviços', 'Contato');
    showNavBar($links);
    showContato();
    $msg = 'Todos os direitos reservados';
    showRodape($msg); 
    
}
    


  




