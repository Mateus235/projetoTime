<?php 
    session_start();

    include_once "../models/conexao.php";

    if(isset($_POST['submit'])){
        $email = mysqli_escape_string($conexao, $_POST['email']);
        $checar_email = "SELECT * FROM tb_cadastro WHERE email = '$email'";
        $result = mysqli_query($conexao, $checar_email);
    
        if(mysqli_num_rows($result) < 1){
            header('Location: ../senha.php');
            $_SESSION['erro-email-senha'] = "Email não cadastrado.";
        }
        else
        { 
        if(isset($_POST['submit'])){
        $email = mysqli_escape_string($conexao, $_POST['email']);
        $assunto = "Contato pelo Site";
        $chave = sha1(uniqid(mt_rand(), true));
        $conf = mysqli_query($conexao, "INSERT INTO tb_recuperar(email, chave) VALUES ('$email', '$chave')");

        $conteudo = "<html>
        <head>
            <title>Document</title>
        </head>
        <body>
            <h1>Acesse o link abaixo para recuperar a sua senha</h1>
            <a href='http://localhost/santacruz/recsenha.php?email=$email&id={$chave}'> Clique aqui </a>
        
        </body>
        </html>";

        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $headers .= 'From: Santa Cruz Futebol Clube <$email>';

        $destino = mail($email, $assunto, $conteudo, $headers);

        if($destino){
            echo $destino;
            echo $email;
            echo $assunto;
            echo $headers;
            echo $conteudo;
            echo "E-mail enviado com Sucesso!";
            
            $_SESSION['sucesso-email-senha'] = 'Foi enviado um email para recuperação de sua senha';
            header('Location: ../senha.php');
        }
        else{
            echo "ERRO";
            header('Location: ../senha.php');
        }
    }
    }
}
?>