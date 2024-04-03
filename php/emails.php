<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emails</title>
    <link href="../css/emails.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>

<body>

<?php include '../html/navbar.html';?>

<?php include '../html/buttonzap.html';?>

<div class="container-emails">
    <div class="titulo">CONTATE-NOS</div>
    <div class="description"><strong>Nossos e-mails e seus respectivos setores</strong></div>
    <div class="description">Clique no email correspondente abaixo para enviar uma mensagem!</div>
    <div class="container-box">
        <div class="container-links">
            <form action="https://api.staticforms.xyz/submit" method="POST">
                <div class="ul-form">
                    <li class="li-form">
                        <label>SUPORTE | TECNICO</label>
                        <div class="form-control" id="control-24h" style="height: 6vh; background-color: rgb(4, 21, 69); transition: all 0.3s ease 0s; display: flex">
                            <div class="email-text-box" id="email-text-box-left">suporte24h@rix.com.br</div>
                            <input type="text" class="inputs-navs" id="navinput1_1" name="name" placeholder="Digite seu nome completo" autocomplete="off">
                            <input type="text" class="inputs-navs" id="navinput1_2" name="email" placeholder="Digite o seu email" autocomplete=off>
                            <textarea type="message" name="message" cols="10" rows="5" class="input-area" id="textArea1" placeholder="Comentarios" autocomplete=off></textarea>                       
                            <button type="submit" class="buttom-form" id="btn-24h">ENVIAR</button>
                            <input type="hidden" name="accessKey" value="3641a113-84a2-43c0-a63a-dbd6e027855e">
                            <input type="hidden" name="redirectTo" value="http://localhost:3000/html/obrigado.html">
                        </div>
                    </li>
                </div>  
            </form>
            <form action="https://api.staticforms.xyz/submit" method="POST">
                    <div class="ul-form">
                        <li class="li-form">
                            <label for="name">FINANCEIRO</label>
                            <div class="form-control" id="control-financeiro" style="height: 6vh; background-color: rgb(4, 21, 69); transition: all 0.3s ease 0s; display: flex">
                                <div class="email-text-box" id="email-text-box-center">contato@rix.com.br</div>
                                <input type="text" class="inputs-navs" id="navinput2_1" name="name" placeholder="Digite seu nome completo" autocomplete="off" value>
                                <input type="email" class="inputs-navs" id="navinput2_2" name="email" placeholder="Digite o seu email" autocomplete=off value>
                                <textarea type="message" name="message" cols="10" rows="5" class="input-area" id="textArea2" placeholder="Digite o motivo de sua mensagem" autocomplete=off value></textarea>
                                <button type="submit" class="buttom-form" id="btn-financeiro">ENVIAR</button>
                                <input type="hidden" name="accessKey" value="3641a113-84a2-43c0-a63a-dbd6e027855e">
                                <input type="hidden" name="redirectTo" value="http://localhost:3000/html/obrigado.html">
                            </div>  
                        </li>
                    </div>  
            </form>
            <form action="https://api.staticforms.xyz/submit" method="POST">
                    <div class="ul-form">
                        <li class="li-form">
                            <label for="name">COMERCIAL</label>
                            <div class="form-control" id="control-comercial" style="height: 6vh; background-color: rgb(4, 21, 69); transition: all 0.3s ease 0s; display: flex">
                                <div class="email-text-box" id="email-text-box-right">comercial@rix.com.br</div>
                                <input type="text" class="inputs-navs" id="navinput3_1" name="name" placeholder="Digite seu nome completo" autocomplete=off value>
                                <input type="text" class="inputs-navs" id="navinput3_2" name="email" placeholder="Digite o seu email" autocomplete=off value>
                                <textarea type="message" name="message" cols="10" rows="5" class="input-area" id="textArea3" placeholder="Digite o motivo de sua mensagem" autocomplete=off value></textarea>
                                <button type="submit" class="buttom-form" id="btn-comercial">ENVIAR</button>
                                <input type="hidden" name="accessKey" value="3641a113-84a2-43c0-a63a-dbd6e027855e">
                                <input type="hidden" name="redirectTo" value="http://localhost:3000/html/obrigado.html">
                                
                            </div>  
                        </li>
                    </div> 
                </div>  
            </form>
        </div>
    </div>
</div>

<footer>
<?php include '../html/rodape.html';?>
</footer>

<script src="../js/index.js"></script>
<script src="../js/emails.js" defer></script>
<script src="../js/fontsize.js"></script>
</body>
</html>