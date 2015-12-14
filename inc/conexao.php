<?php

try {
    $conexao = new \PDO("mysql:host=localhost;dbname=escola","root","ws56gb89");
}
catch(\PDOException $e) {
    die("Não foi possível estabelecer a conexão com o banco de dados: Erro código: ".$e->getCode().": ".$e->getMessage());
}