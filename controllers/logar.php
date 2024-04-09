<?php 
    session_start();

    include_once '../models/conexao.php';

    if(isset($_POST['submit'])){
        $email = mysqli_escape_string($conexao, $_POST['email']);
        $senha = mysqli_escape_string($conexao, $_POST['senha']);

        $sql = "SELECT * FROM tb_cadastro WHERE email = '$email' and senha = '$senha';";
        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1){
            unset ($_SESSION['email']);
            unset ($_SESSION['senha']);

            $_SESSION['erro-login'] = "Login ou senha incorretos";
            header('location: ../login.php');
        } else {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;

            $_SESSION['sucesso-login'] = "Logado com sucesso";
            header('location: ../home.php');
        }
    }
?>