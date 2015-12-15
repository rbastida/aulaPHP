<?php

function showNavBar($links) {
    
    $n=0;
    ?>
    <!-- ----------------------------------------------------------------------------------------------------------------------------- -->
    <!-- BARRA DE NAVEGACAO -->
    <!-- ----------------------------------------------------------------------------------------------------------------------------- -->

        <ul class="nav nav-pills">
            <?php
            $n=0;
            foreach ($links as $value) {
            ?>    
                <li><a href="index.php?op=<?php echo $n++; ?>"><?php echo $value; ?></a></li>
            <?php
            }
            ?>                    
        </ul>           
    
    <?php
}

function showRodape($msg) {
    ?>
    <pre class='prettyprint linenums lang-rb'><?php echo $msg; ?> - <?php echo date('d/m/Y'); ?></pre>
    <?php
}    

function showContato() {
    ?>
    <div class="container">
        <form class="form-horizontal" role="form" method="POST" action="contato.php">
            <div class="form-group">
                <label for="name">Nome</label>
                <div class="input-group col-sm-6">
                  <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome Completo" required>
                </div>
            </div>                

            <div class="form-group">
                <label for="name">Email</label>
                <div class="input-group col-sm-6">
                  <input type="text" class="form-control" name="email" id="email" placeholder="E-mail" required>
                </div>
            </div>                

            <div class="form-group">
                <label for="name">Assunto</label>
                <div class="input-group col-sm-6">
                  <input type="text" class="form-control" name="assunto" id="assunto" placeholder="Assunto" required>
                </div>
            </div>                

            <div class="form-group">
                <label for="name">Mensagem</label>
                <div class="input-group col-sm-6">
                  <input type="text" class="form-control" name="mensagem" id="mensagem" placeholder="Mensagem" required>
                </div>
            </div>  

            <div class="form-group">
                 <input type="submit" id="submitted" name="submitted" class="btn btn-primary">
            </div> 
        </form>
    </div>
    <?php
}    







