<?php
session_start();

require_once '../models/conexao.php';

if(isset($_POST['submit'])){
    $nome = mysqli_escape_string($conexao, $_POST['nome']);
    $email = mysqli_escape_string($conexao, $_POST['email']);
    $senha = mysqli_escape_string($conexao, $_POST['senha']);
    $senha2 = $_POST['senha2'];
    
    $checar_email = "SELECT * FROM tb_cadastro WHERE email = '$email'";
    $result = mysqli_query($conexao, $checar_email);

    if(mysqli_num_rows($result) > 0){
        $_SESSION['erro-email'] = "O email já está em uso.";
    }
    else
    {
        $sql = "INSERT INTO tb_cadastro(nome, email, senha) values('$nome', '$email', '$senha')";

        if($senha == $senha2){
            if(mysqli_query($conexao, $sql)){
                $_SESSION['sucesso'] = "Cadastro realizado com sucesso";
            }
            else
            {
                $_SESSION['erro-ao-cadastrar'] = "Erro ao cadastrar usuário: " . mysqli_error($conexao);
            }
        } 
        else
        {
            $_SESSION['erro-senha'] = "As senhas não coincidem.";
        }
    }
    header('Location: ../index.php'); 
}
