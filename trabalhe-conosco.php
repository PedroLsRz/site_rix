<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalhe Conosco</title>
    <link href="css/trabalhe-conosco.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
    <link href="css/buttonzap.css" rel="stylesheet">
    <link href="css/rodape.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="shortcut icon" href="../ico/favicon.ico" type="image/x-icon">
</head>
<body>
   <!-- NavBar -->
   <div class="container-navs">
    <nav class="nav-left">
        
            <a href="#nav-bottom" class="link" tabindex="1">MENU
                <span class="item-number">1</span>
            </a>
            <a href="#services-focus" class="link" tabindex="2">SERVIÇOS
                <span class="item-number">2</span>
            </a>
            <a href="#rodape-focus" class="link" tabindex="3">RODAPÉ
                <span class="item-number">3</span>
            </a>
            
    </nav>
    <div class="itens-mid">
        <li class="font-size-control" >
            <a class="link-size-short" id='decrease'>A-</a>
        </li>
        <li class="font-size-control" >
            <a class="link-size-big" id='increase'>A+</a>
        </li>
    </div>
    
    <nav class="nav-right">
        <div class="container-togle-switch">
            <label for="switch" >
                    <input type="checkbox" id="switch" class="theme-checkbox">
            </label>
            
        </div>
        <a href="acessibilidade.php" class="acessibilidade">
            ACESSIBILIDADE
        </a>

    </nav>
</div>
<header id="cabecalho" style="height: 10vh; transition: 0.3s;">
    <a class="logo" href="index.php"><img src="img/rix-logo-2.png" alt="logo"></a>

                        <!-- PARA MOBILE (SOMENTE O DIVISOR E LOGO)-->
<div class="divisor_mobile">
    <a class="logo_mobile" href="index.php"><img src="/img/rix-logo-2.png" alt="logo"></a>
    <img class="menu-painel" src="/img/menu-nav.png" alt="logo" id="menu-ativador"> 
</div>       
                        <!-- FIM PARA MOBILE -->                   
    <nav class ="nav-menu" id="nav-bottom" >
        <ul class="nav__links">
            <li>
                
                <a class="nav_mini_item_no_painel" href="index.php" id="item_principal">PRINCIPAL</a>
            </li>
            <li>
                <div class="painel" id="painel">
                    <a class="link-painel" href="services/link-dedicado.php"">Link Dedicado</a>
                    <a class="link-painel" href="services/fibra-optica.php">Fibra Óptica</a>
                    <a class="link-painel" href="services/banda-larga.php">Banda Larga</a>
                    <a class="link-painel" href="services/radio-backup.php">Radio Backup</a>
                    <a class="link-painel" href="services/link-temporario.php">Link Temporário</a>
                    <a class="link-painel" href="services/suporte.php">Suporte em redes</a>
                </div>
                <a class="nav_mini_item_no_painel" id="item_servicos" style="display: flex;">SERVIÇOS</a>
            </li>
            <li>
                <div class="painel-short" id="painel-short">
                    <a class="link-painel-short" href="https://wa.me/5583991553500">WhatsApp</a>
                    <a class="link-painel-short" href="emails.php">E-mails</a>
                    <a class="link-painel-short">Fixo (83)3341-5770</a>
                </div>
                <a class="nav_mini_item" href="#" id="item_contatos" style="display: flex;">CONTATOS</a>  
            </li>
            <li>
                <div class="painel-short" id="painel-short-sobre">
                    <a class="link-painel-short" href="rix-telecom.php">A Rix</a>
                    <a class="link-painel-short" href="trabalhe-conosco.php">Trabalhe Conosco</a>
                    <a target='_blank' class="link-painel-short" href="https://www.google.com/search?q=teste+de+velocidade+de+internet&oq=test…de+internet&aqs=chrome..69i57j0l5j69i61l2.800j0j9&sourceid=chrome&ie=UTF-8">Teste de velocidade</a>
                </div>
                <a class="nav_mini_item" href="#" id="item_sobre">SOBRE
                    
                </a>
            </li>
            <li>
            <a class="nav_mini_item_no_painel" href="faq.php" id="item_faq">FAQ</a>
            </li> 
        </ul>  
        
    </nav> 
    <div class="container-cta" id="icon-number">
        <i class="material-symbols-outlined phone-0800" >
            call 
        </i> 
        <h3 class="fone-0800" id="0800">0800 732 0749</h3>
    </div>
    </header>
 <!-- NavBar -->


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

    <!-- button zap -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/buttonzap.css" rel="stylesheet">
</head>
<body>
    <div class="buttonzap">
        <a href='https://wa.me/5583991553500'class="icon" target='_blank'><i class="fab fa-whatsapp"></i></a>
      </div>
      <!-- button zap -->
    <!-- RODAPE -->
    <nav class="nav-rodape" id="rodape-focus">
        
        </div>
        <div class="infos">
        <img class="logo-rix" src="img/logo-rix.png" alt="etiqueta" >
        <ul class="menu-textos" id="menu-links_rapidos">
                    <h2>LINKS RÁPIDOS</h2>
                    <li class="menu-item">
                        <a target='_blank' class="menu-link" href="https://www.google.com/search?q=teste+de+velocidade+de+internet&oq=test…de+internet&aqs=chrome..69i57j0l5j69i61l2.800j0j9&sourceid=chrome&ie=UTF-8">Teste de velocidade</a>
                        <a class="menu-branco">&nbsp;</a>
                        <a class="menu-branco">&nbsp;</a>
                    </li>
                </ul>
                <ul class="menu-textos" id="menu-fale_conosco">
                <h2>FALE CONOSCO</h2>
                    <li class="menu-item">
                        <a target='_blank' href='https://wa.me/5583991553500' class="menu-link">WhatsApp</a>
                        <a href="emails.php" class="menu-link">E-mails</a>
                        <a class="menu-link">Fixo: (83) 3341-5770</a>
                    </li>
                </ul>
                <ul class="menu-textos" id="menu-sobre">
                <h2>SOBRE</h2>
                    <li class="menu-item">
                        <a href="rix-telecom.php" class="menu-link">A Rix</a> 
                        <a href="trabalhe-conosco.php" class="menu-link">Trabalhe conosco</a>
                        <a href="faq.php" class="menu-link">FAQ</a>
                    </li>
                </ul>
                   
                </div>
                <div class="tarja">
                &copy; 2024 Rix Telecom. Todos os direitos reservados.<br> Criado por Rix Telecom.
                </div>
            </nav>
<!-- Rodapé -->

    <script src="../js/fontsize-nav.js"></script>
    <script src="../js/index.js"></script>
</body>
</html>