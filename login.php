<?php
    session_start();
    include_once('models/conexao.php'); 
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./CSS/login.css" class="rel"> <!-- Link da folha de estilos da página de login -->
    <link rel="stylesheet" href="./CSS/estrutura.css"> <!-- Link da folha de estilos da estrutura geral das páginas web -->
</head>

<body>
    <main>
        <div class="estrutura"> <!-- Div criada para a organização de toda a estrutura da página -->
            <div class="cabecalho"> <!-- Div criada para a organização de todo o cabeçalho de cores e escudo utilizado no site -->
                <img id="escudo" src="./IMG/Logo.png" alt="Escudo"> <!-- Imagem do escudo do time -->
                <div class="cores"> <!-- Div criada para a organização das cores do time dentro da div cabeçalho -->
                    <div id="preto"></div> <!-- Div feita para criar uma linha de cor preta -->
                    <div id="branco"></div> <!-- Div feita para criar uma linha de cor branca -->
                    <div id="vermelho"></div> <!-- Div feita para criar uma linha de cor vermelha -->
                </div>
            </div>
            <img src="./IMG/mascote.png" alt="mascote do clube" class="mascote">
            <form action="./controllers/logar.php" method="post"> <!-- Tag utilizada para dar início ao formulário de login -->
                <input type="email" placeholder="E-mail" name="email"> <!-- Input utilizado no formulário para solicitar ao usuário que preencha com seu e-mail -->
                <input type="password" placeholder="Senha" name="senha"> <!-- Input utilizado no formulário para solicitar ao usuário que preencha com sua senha -->
                <button class="login-button" name="submit" type="submit">Login</button> <!-- Botão criado para que o usuário confirme o login -->
            </form>
            <div class="ancoras"> <!-- Div criada para organizar links e informações adicionais -->
                <a class="senha" href="./senha.php"> Esqueci minha senha</a> <!-- Link para a página de recuperação de senha -->
                <p>Não possui conta? <a class="ancora" href="./index.php">Cadastre-se</a></p> <!-- Parágrafo utilizado para guiar o usuário caso ele não tenha uma conta -->
            </div>
        </div>
    </main>
    <footer>
        <div class="footer">
            <p class="p-footer">Design by Jefferson, Mateus e Rodrigo - 2024 &copy;</p> <!-- Footer com as informações de quem desenvolveu o site -->
        </div>
    </footer>

    <?php
        if (isset($_SESSION['erro-login'])) 
        {
            echo '<input type="hidden" id="erro_login" value="' . $_SESSION['erro-login'] . '">';
            unset($_SESSION['erro-login']); 
        }
        if (isset($_SESSION['sucesso-alterar-senha'])) 
            {
                echo '<input type="hidden" id="sucesso-alterar-senha" value="' . $_SESSION['sucesso-alterar-senha'] . '">';
                unset($_SESSION['sucesso-alterar-senha']); 
            }

            
    ?>

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
