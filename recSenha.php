<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Senha</title>
    <link rel="stylesheet" href="./CSS/cadastro.css" class="rel"> <!-- Link da folha de estilos da página de cadastro -->
    <link rel="stylesheet" href="./CSS/estrutura.css" class="rel"> <!-- Link da folha de estilos da estrutura geral das páginas web -->
</head>

<body>
    <main> <!-- Tag utilizada para definir onde se concentrará todo o conteúdo da página dentro do body -->
        <div class="estrutura"> <!-- Div criada para a organização de toda a estrutura da página -->
            <div class="cabecalho"> <!-- Div criada para a organização de todo o cabeçalho de cores e escudo utilizado no site -->
                <img id="escudo" src="./IMG/Logo.png" alt="Escudo"> <!-- Imagem do escudo do time -->
                <div class="cores"> <!-- Div criada para a organização das cores do time dentro da div cabeçalho -->
                    <div id="preto"></div> <!-- Div feita para criar uma linha de cor preta -->
                    <div id="branco"></div> <!-- Div feita para criar uma linha de cor branca -->
                    <div id="vermelho"></div> <!-- Div feita para criar uma linha de cor vermelha -->
                </div>
            </div>
            <h1 class="sub-title">Recuperar Senha</h1> <!-- Título da página -->
            <?php include_once('./controllers/alterar.php');?>
            <form method="POST"> <!-- Tag utilizada para dar início ao formulário de cadastro -->
                <input class="c" id="senha" type="password" placeholder="Nova Senha" name="senha" required> <!-- Input utilizado no formulário para solicitar ao usuário que preencha com sua senha -->
                <input class="d" id="senha2" type="password" placeholder="Confirme sua senha" name="senha2" required> <!-- Input utilizado no formulário para solicitar ao usuário que confirme a senha que ele preencheu anteriormente -->
                <button class="btn-cadastro"id="btn" type="submit" name="submit">Confirmar</button> <!-- Botão criado para que o usuário confirme seu cadastro -->
            </form>
        </div>
    </main>
    <footer>
        <?php 
        if (isset($_SESSION['erro-alterar-senha'])) 
            {
                echo '<input type="hidden" id="erro-alterar-senha" value="' . $_SESSION['erro-alterar-senha'] . '">';
                unset($_SESSION['erro-alterar-senha']); 
            }
            ?>
        <div class="footer">
            <p class="p-footer">Design by Jefferson, Mateus e Rodrigo - 2024 &copy;</p> <!-- Footer com as informações de quem desenvolveu o site -->
        </div>


        
    </footer>

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>

<!-- By Allan -->