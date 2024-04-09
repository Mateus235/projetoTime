<?php
    session_start();
    
    require_once './models/conexao.php';
        
    if(isset($_POST['submit']))
    {
        $email = $_GET['email'];
        $senha = mysqli_escape_string($conexao, $_POST['senha'] );
        $senha2 = $_POST['senha2'];

        $sql = "UPDATE tb_cadastro SET senha = '$senha' where email = '$email'";

        if($senha == $senha2){
            if(mysqli_query($conexao, $sql)){
                $_SESSION['sucesso-alterar-senha'] = "Senha alterada com sucesso";
                header('location: ./login.php');
            }
            else
            {
                echo "erro";
            }
        }
        else
        {
            $_SESSION['erro-alterar-senha'] = "As senhas são diferentes!!";
        }


    }
    


