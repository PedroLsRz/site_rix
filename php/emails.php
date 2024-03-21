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

<div class="buttonzap"><a href='https://wa.me/5583991553500'class="icon" target='_blank'><i class="fab fa-whatsapp"></i></a></div>

<div class="container-emails">
    <div class="titulo">CONTATE-NOS</div>
    <div class="description">Nossos e-mails e seus respectivos setores</div>
    <div class="container-links">
        <form action="https://formsubmit.co/pedrodbr955@gmail.com" method="POST" enctype="multipart/form-data">
            <div class="ul-form">
                <li class="li-form">
                    <label>SUPORTE | TECNICO</label>
                        <div class="form-control" id="control-24h" style="height: 6vh; background-color: rgb(4, 21, 69); transition: all 0.3s ease 0s; display: flex">
                        <div class="email-text-box" id="email-text-box-left">suporte24h@rix.com.br</div>
                        <input type="text" class="inputs-navs" id="navinput1_1" name="name" placeholder="Digite seu nome completo" autocomplete="off">
                        <input type="text" class="inputs-navs" id="navinput1_2" name="name" placeholder="Digite o seu email" autocomplete=off>
                        <input type="text" class="inputs-navs" id="navinput1_3" name="name" placeholder="Digite o seu telefone" autocomplete=off>
                        <textarea type="message" cols="10" rows="5" class="input-area" id="textArea1" placeholder="Comentarios" autocomplete=off></textarea>                       
                        <button type="submit" class="buttom-form" id="btn-24h">ENVIAR</button>
                    </div>
                </li>
            
                <div class="ul-form">
                    <li class="li-form">
                        <label for="name">FINANCEIRO</label>
                        <div class="form-control" id="control-financeiro" style="height: 6vh; background-color: rgb(4, 21, 69); transition: all 0.3s ease 0s; display: flex">
                            <div class="email-text-box" id="email-text-box-center">contato@rix.com.br</div>
                            <input type="text" class="inputs-navs" id="navinput2_1" placeholder="Digite seu nome completo" autocomplete="off" value>
                            <input type="text" class="inputs-navs" id="navinput2_2" name="name" placeholder="Digite o seu email" autocomplete=off value required>
                            <input type="text" class="inputs-navs" id="navinput2_3" name="name" placeholder="Digite o seu telefone" autocomplete=off value required>
                            <textarea type="message" cols="10" rows="5" class="input-area" id="textArea2" placeholder="Digite o motivo de sua mensagem" autocomplete=off value></textarea>
                            <button type="submit" class="buttom-form" id="btn-financeiro">ENVIAR</button>
                        </div>  
                    </li>
                </div>  
                <div class="ul-form">
                    <li class="li-form">
                        <label for="name">COMERCIAL</label>
                        <div class="form-control" id="control-comercial" style="height: 6vh; background-color: rgb(4, 21, 69); transition: all 0.3s ease 0s; display: flex">
                            <div class="email-text-box" id="email-text-box-right">comercial@rix.com.br</div>
                            <input type="text" class="inputs-navs" id="navinput3_1" placeholder="Digite seu nome completo" autocomplete=off value>
                            <input type="text" class="inputs-navs" id="navinput3_2" name="name" placeholder="Digite o seu email" autocomplete=off value required>
                            <input type="text" class="inputs-navs" id="navinput3_3" name="name" placeholder="Digite o seu telefone" autocomplete=off value required>
                            <textarea type="message" cols="10" rows="5" class="input-area" id="textArea3" placeholder="Digite o motivo de sua mensagem" autocomplete=off value></textarea>
                            <button type="submit" class="buttom-form" id="btn-comercial">ENVIAR</button>
                        </div>  
                    </li>
                </div> 
            </div>  
        </form>
    </div>
</div>

<footer>
<?php include '../html/rodape.html';?>
</footer>

<script src="../js/index.js"></script>
<script src="../js/emails.js" defer></script>

</body>
</html>