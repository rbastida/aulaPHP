<?php
require_once dirname(__FILE__)."/inc/i_top.php";
//require_once './inc/conexao.php';

if ($_POST['submitted']) {

    processaForm();
    
} else {
    
    showForm();
    
}

function showForm() {
    
    ?>
    <div class="container">
     
    <?php
    $links = array('Home', 'Empresa', 'Produtos', 'Serviços', 'Contato');
    showNavBar($links);
    ?>
    
    <br>        
    <label>Contato</label>
    <br>
    <br>
    
    <?php
    showContato();
    $msg = 'Todos os direitos reservados';
    showRodape($msg);    
    ?>
    </div>
    <?php
    
}

function processaForm() {

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

}

    


  




