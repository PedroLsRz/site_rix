<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalhe Conosco</title>
    <link href="../css/trabalhe-conosco.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="shortcut icon" href="../ico/favicon.ico" type="image/x-icon">
</head>
<body>
<?php include '../html/navbar.html';?>
<?php include '../html/buttonzap.html';?>

<div class="container-trabalho">
    <div class="titulo">
        <h1>TRABALHE CONOSCO</h1>
    </div>
    <div class="container-trabalho-mid">
        Buscamos por profissionais proativos e que buscam aprender um pouco de tudo.
        <br>
        Envie seus dados pelo formulário, aguardamos sua mensagem! 
    </div>
    <div class="container-trabalho-bottom">  
        <form action="../functions/download.php" method="POST" enctype="multipart/form-data"> <!-- ENVIA OS DADOS DO FORMS PARA O STORAGE -->
            <div class="ul-form">
                <li class="li-form">
                    <label for="name">NOME COMPLETO</label>
                    <input type="text" class="form-control" name="name" placeholder="Digite seu nome">
                </li>
                <div class="ul-form1">
                    <li class="li-form">
                        <label for="name">E-MAIL</label>
                        <input type="email" class="form-control" name="email" placeholder="Digite seu Email">
                    </li>
                </div>
            </div>
            <li class="li-form">
                <label for="file_path">CURRÍCULO</label>
                <input type="file" class="input-curriculo" id="file_path" name="file_path">
            </li>
            <li class="li-form">
                <button type="submit" class="buttom-form" name = "entrar">ENVIAR</button>
                <input type="hidden" name="_captcha" value="false"> <!-- REMOVE O PEDIDO DE VALIDAÇÃO DO CAPTCHA -->
            </li>
        </form>
    </div>
</div>

<footer>
<?php include '../html/rodape.html';?>
</footer>
    <script src="../js/fontsize-nav.js"></script>
    <script src="../js/index.js"></script>
</body>
</html>