<?php

define('HOST', 'localhost'); //servidor
define('USUARIO', 'root'); //usuario
define('SENHA', ''); //senha da 1conexão
define('DBNAME', 'formprof'); //nome da database


try {

$conexao = new pdo('mysql:host=' . HOST . ';dbname=' .
                                 DBNAME, USUARIO, SENHA);
} catch (PDOException $e) {
echo "Erro: Conexão com banco de dados não foi realizada com sucesso.
 Erro gerado " . $e->getMessage();
}


?>