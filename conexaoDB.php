<?php

function () {

    try {
        $config  = include"config.php";
        
        if (! isset($config['db'])) {
            throw new \InvalidArgumentException("Configuração do Banco de Dados não existe!");
        }
        
        $host     = (isset($config['db']['host'])) ?        $config['db']['host']      : null;
        $dbname   = (isset($config['db']['dbname'])) ?      $config['db']['dbname']    : null;
        $user     = (isset($config['db']['user'])) ?        $config['db']['user']      : null;
        $password = (isset($config['db']['password'])) ?    $config['db']['password']  : null;
        
        return new \PDO("mysql:host={$host};dbname={$dbname}", $user, $password);
       
    }
    catch(\PDOException $e) {
        die("Não foi possível estabelecer a conexão com o banco de dados: Erro código: ".$e->getCode().": ".$e->getMessage());
    }
    
}

