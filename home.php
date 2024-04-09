<?php
    session_start(); 

    $logado = $_SESSION['email']
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./CSS/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-darks">
    <div class="container-fluid">    
    <a class="text-white" href="#"> SISTEMA PÁGINA INICIAL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" arial-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
    </button>
    </div>
    <div class="d-flex">
        <a href="./controllers/sair.php" class="btn btn-danger me-5">Sair</a>
    </div>
</nav>
   

    <?php
        if (isset($_SESSION['sucesso-login'])) 
        {
            echo '<input type="hidden" id="sucesso_login" value="' . $_SESSION['sucesso-login'] . '">';
        }else{
            unset($_SESSION['sucesso-login']);
            header('location: login.php');
        }
    ?>
      <h1>Acessou o sistema</h1>
    <?php
     echo "<h1>$logado</h1>"
    ?>
  

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>