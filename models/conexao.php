<?php

$host = "localhost";
$user = "root";
$senha = "";
$bdnome = "db_santacruz";

$conexao = new mysqli($host, $user, $senha, $bdnome);

// if($conexao -> connect_errno){
//     echo "Erro";
// }
// else
// {
//     echo "Conexão efetuada com sucesso";
// }