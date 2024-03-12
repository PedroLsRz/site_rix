<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emails</title>
    <link href="../css/emails.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <script src="../js/emails.js" defer></script>
</head>

<body>

        <nav class="nav-top">
            <a class="nav_mini_item" href="#">Você está em: </a>
            
        </nav>
        <header>
            <a class="logo" href="../php/index.php"><img src="../img/rix-logo-2.png" alt="logo"></a>
            <nav>
                <ul class="nav__links">
                    <li>
                        <div class="painel">
                            <a class="link-painel" target='_blank' href="#">Link</a>
                        </div>
                        <a class="nav_mini_item" href="#">Principal</a>
                    </li>
                    <li>
                        <div class="painel">
                            <a class="link-painel" target='_blank' href="#">Link</a>
                        </div>
                        <a class="nav_mini_item" href="#">Serviços</a>
                    </li>
                    <li>
                        <div class="painel">
                            <a class="link-painel" target='_blank' href="#">Link</a>
                        </div>
                        <a class="nav_mini_item" href="#">Contatos</a>  
                    </li>
                    <li>
                        <div class="painel">
                            <a class="link-painel" target='_blank' href="#">Link</a>
                        </div>
                        <a class="nav_mini_item" href="#">Sobre</a>
                    </li>
                    <li>
                    <div class="painel">
                        <a class="link-painel" target='_blank' href="#">Link</a>
                    </div>
                    <a class="nav_mini_item" href="#">FAQ</a>
                    </li> 
                    
                </ul>  
            </nav>
            </a>
            
            <p class="menu cta">Menu</p>
            <label for="switch" >
                <input type="checkbox" id="switch" class="theme-checkbox">
            </label>
        </header>
      

<div class="buttonzap">
  <a href='https://wa.me/5583991553500'class="icon" target='_blank'><i class="fab fa-whatsapp"></i></a>
</div>
<div class="container-emails">
    <div class="titulo">
        CONTATE-NOS
    </div>
    <div class="description">
       Nossos e-mails e seus respectivos setores 
    </div>
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

<nav class="nav-rodape">
<div class="container-rodape">
</div>
<div class="infos">
<img class="logo-rix" src="../img/logo-rix.png" alt="etiqueta" >
            <ul class="menu-textos">
            <div class="menu-titulo">CONTATO</div>
                <li class="menu-item">
                    <a target='_blank' href='https://wa.me/5583991553500' class="menu-link">WhatsApp</a> <br>
                    <a href="#" class="menu-link">Fixo (83) 3341-5770</a><br>
                    <a href="#" class="menu-branco">A</a><br>
                </li>
            </ul>
            <ul class="menu-textos">
            <div class="menu-titulo">PARCEIROS</div>
                <li class="menu-item">
                    <a target='_blank' href="https://www.opix.com.br/" class="menu-link">Opix</a><br>
                    <a href="#" class="menu-branco">A</a><br>
                    <a href="#" class="menu-branco">A</a><br>
                </li>
            </ul>
            <ul class="menu-textos">
                <div class="menu-titulo">SOBRE</div>
                <li class="menu-item">
                    <a href="#" class="menu-link">A Rix</a><br>
                    <a href="trabalhe-conosco.php" class="menu-link">Trabalhe conosco</a>
                    <a href="#" class="menu-branco">A</a><br>
                </li>
            </ul>
        </div>
    <div class="container-logo">  
        <div class="endereco"><img class="pin" src="../img/pin.png">Av. Francisco Lustosa Cabral, 481, Cristo Redentor, João Pessoa/PB </div>
    </div>
    
        <div class="tarja">
        &copy; 2024 Rix Telecom. Todos os direitos reservados.<br> Criado por Rix Telecom.
        </div>
    </nav>
    <script src="../js/index.js"></script>
    
</body>
</html>