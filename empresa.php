<?php
require_once dirname(__FILE__)."/inc/i_top.php";

    ?>
    <div class="container">
    
    <?php
    
    $links = array('Home', 'Empresa', 'Produtos', 'Serviços', 'Contato');
    showNavBar($links);
    ?>

    <br>        
    <label>Empresa</label>
    <br>
    <br>    

    <?php
    $msg = 'Todos os direitos reservados';
    showRodape($msg);
    ?>

    </div>
        


  




