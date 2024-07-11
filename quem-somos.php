<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Rix</title>
    <link href="css/quem-somos.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
    <link href="css/buttonzap.css" rel="stylesheet">
    <link href="css/rodape.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="shortcut icon" href="../ico/favicon.ico" type="image/x-icon">
</head>
<body>

   <!-- NavBar -->
   <div class="container-navs">
   <div class="space"></div>
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
    <a class="logo_mobile" href="index.php"><img src="img/rix-logo-2.png" alt="logo"></a>
    <img class="menu-painel" src="img/menu-nav.png" alt="logo" id="menu-ativador"> 
</div>       
                        <!-- FIM PARA MOBILE -->      
                        <!-- NAVBAR -->           
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
 <!-- FIM NAVBAR --> 


<div class="container">
    <div class="titulo"><h1>QUEM SOMOS</h1></div>
    <div class="container-mid" id="mid-text">   
        <i><strong>Subtítulo</strong></i>
        <p></p>
        Descrição
        <p>&nbsp;</p>
    </div>
    <!-- VALDEMIR --> 
    <div class="cargo">Diretoria</div>
    <div class="display-valdemir">
        <div class="nothing">&nbsp;</div>
        <div class="text">Valdemir Cesar da Silva</div>
        <div class="nothing">&nbsp;</div>
        <img class="valdemir_icon" src="img/funcionario/Valdemir-frente.JPG"/>   
        <div class="nothing">&nbsp;</div> 
        <div class="text">Fundador e diretor.</div>
    </div>
    <!-- LUCIANE E SILMAR EM GRID--> 
    <div class="cargo">Gerência Administrativa</div>
    <div class="descricao">&nbsp;</div>  
    <div class="display-administrativo">
        <!-- 1ª LINHA, NOMES --> 
        <div class="nothing">&nbsp;</div>
        <div class="text">Luciane</div>
        <div class="nothing">&nbsp;</div>
        <div class="text">Silmar Guerra da Silva</div>
        <div class="nothing">&nbsp;</div>
        <!-- 2ª LINHA, FOTOS --> 
        <div class="nothing">&nbsp;</div>
        <img class="func_icon" src="img/funcionario/Luciane.JPG"/>
        <div class="nothing">&nbsp;</div>
        <img class="func_icon" src="img/funcionario/Silmar.JPG"/>
        <div class="nothing">&nbsp;</div>
        <!-- 3ª LINHA, CARGOS --> 
        <div class="nothing">&nbsp;</div>
        <div class="text">Cargo do respectivo <br> funcionario</div>
        <div class="nothing">&nbsp;</div>
        <div class="text">Cargo do respectivo <br> funcionario</div>
        <div class="nothing">&nbsp;</div>
    </div>
        <!-- HENRIQUE -->
    <div class="cargo">Gerente de Suporte</div>
    <div class="display-solo">
        <div class="nothing">&nbsp;</div>
        <!-- NOME --> 
        <div class="text">Henrique da Silva Viana</div>
        <div class="nothing">&nbsp;</div>
        <!-- FOTO --> 
        <img class="func_icon" src="img/funcionario/Henrique.JPG"/>   
        <div class="nothing">&nbsp;</div> 
        <!-- CARGO --> 
        <div class="text">Cargo do respectivo funcionario</div>
    </div>
    <!-- ADINAEL E WAGNER EM GRID--> 
    <div class="cargo">Especialistas em serviços externos</div>
    <div class="descricao">&nbsp;</div>  
    <div class="display-administrativo">
        <!-- 1ª LINHA, NOMES --> 
        <div class="nothing">&nbsp;</div>
        <div class="text">Adinael Pereira de Lima</div>
        <div class="nothing">&nbsp;</div>
        <div class="text">Wagner Bruno Pereira de Brito</div>
        <div class="nothing">&nbsp;</div>
        <!-- 2ª LINHA, FOTOS --> 
        <div class="nothing">&nbsp;</div>
        <img class="func_icon" src="img/funcionario/adinael.JPG"/>
        <div class="nothing">&nbsp;</div>
        <img class="func_icon" src="img/funcionario/wagner.JPG"/>
        <div class="nothing">&nbsp;</div>
        <!-- 3ª LINHA, CARGOS --> 
        <div class="nothing">&nbsp;</div>
        <div class="text">Cargo do respectivo <br> funcionario</div>
        <div class="nothing">&nbsp;</div>
        <div class="text">Cargo do respectivo <br> funcionario</div>
        <div class="nothing">&nbsp;</div>
    </div>
    <!-- PEDRO SOARES --> 
    <div class="cargo">Gerente de Suporte 24 horas</div>
    <div class="display-solo">
        <div class="nothing">&nbsp;</div>
        <!-- NOME --> 
        <div class="text">Pedro Lucas Soares da Silva</div>
        <div class="nothing">&nbsp;</div>
        <!-- FOTO --> 
        <img class="func_icon" src="img/funcionario/pedro-soares.JPG"/>   
        <div class="nothing">&nbsp;</div> 
        <!-- CARGO --> 
        <div class="text">Gerente de Suporte 24h</div>
    </div>
    <!-- SUPORTES 24H DIURNOS EM GRID -->
    <div class="cargo">Suportes 24 horas diúrnos</div>
    <div class="descricao">&nbsp;</div>  
    <div class="display-24h">
        <!-- 1ª LINHA, NOMES --> 
        <div class="nothing">&nbsp;</div>
        <div class="text">Pedro Lima</div>
        <div class="nothing">&nbsp;</div>
        <div class="text">Hugo Lima</div>
        <div class="nothing">&nbsp;</div>
        <!-- 2ª LINHA, FOTOS --> 
        <div class="nothing">&nbsp;</div>
        <img class="func_icon" src="img/funcionario/pedro-lima.JPG"/>
        <div class="nothing">&nbsp;</div>
        <img class="func_icon" src="img/funcionario/hugo.JPG"/>
        <div class="nothing">&nbsp;</div>
        <!-- 3ª LINHA, CARGOS --> 
        <div class="nothing">&nbsp;</div>
        <div class="text">Cargo do respectivo <br> funcionario</div>
        <div class="nothing">&nbsp;</div>
        <div class="text">Cargo do respectivo <br> funcionario</div>
        <div class="nothing">&nbsp;</div>
    </div>
    <!-- SUPORTES 24H NOTURNOS EM GRID -->
    <div class="cargo">Suportes 24 horas noturnos</div>
    <div class="descricao">&nbsp;</div>  
    <div class="display-24h">
        <!-- 1ª LINHA, NOMES --> 
        <div class="nothing">&nbsp;</div>
        <div class="text">Mariana</div>
        <div class="nothing">&nbsp;</div>
        <div class="text">Carlos Silvio</div>
        <div class="nothing">&nbsp;</div>
        <!-- 2ª LINHA, FOTOS --> 
        <div class="nothing">&nbsp;</div>
        <img class="func_icon" src="img/funcionario/mariana.JPG"/>
        <div class="nothing">&nbsp;</div>
        <img class="func_icon" src="img/funcionario/carlinhos.JPG"/>
        <div class="nothing">&nbsp;</div>
        <!-- 3ª LINHA, CARGOS --> 
        <div class="nothing">&nbsp;</div>
        <div class="text">Cargo do respectivo <br> funcionario</div>
        <div class="nothing">&nbsp;</div>
        <div class="text">Cargo do respectivo <br> funcionario</div>
        <div class="nothing">&nbsp;</div>
    </div>
    <!-- MARIA CLARA  -->
    <div class="cargo">Jovem aprendiz</div>
    <div class="display-solo">
        <div class="nothing">&nbsp;</div>
        <!-- NOME -->
        <div class="text">Maria Clara Romano</div>
        <div class="nothing">&nbsp;</div>
        <!-- FOTO -->
        <img class="func_icon" src="img/funcionario/maria-clara.JPG"/>   
        <div class="nothing">&nbsp;</div> 
        <!-- CARGO -->
        <div class="text">Jovem aprendiz.</div>
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

<script src="js/navbar.js" defer></script>
<script src="js/index.js"></script>
<script src="js/fontsize.js"></script>
</body>
</html>