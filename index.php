<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link href="css/index.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
    <link href="css/buttonzap.css" rel="stylesheet">
    <link href="css/rodape.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="shortcut icon" href="ico/favicon.ico" type="image/x-icon">
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
<!-- Imagens Rotativas -->
    <section class="container">
        <div class="slider-wrapper" id="slider-focus">
            <div class="slider">
                <img id="slide-1" src="img/foto-emails.jpeg" onclick="window.location.href='./emails.php'" alt="3D rendering of an imaginary orange planet in space" />
                <img id="slide-2" src="img/ti.png" onclick="window.location.href='./trabalhe-conosco.php'" />
                <img id="slide-3" src="img/business-targed.png" onclick="window.location.href='./rix-telecom.php'"/>
            </div>
            <div class="slider-nav">
                <a href="#slide-1"></a>
                <a href="#slide-2"></a>
                <a href="#slide-3"></a>
            </div>
        </div>
    </section>
    <!-- Menu de serviços -->
    <div class="titulo-licitacao" id="services-focus">
        <h1>Nossos Serviços</h1>
        
        <div class="alinhador">                                                         <!-- PARA MOBILE -->
            <div class="text_top">Conheça nossos serviços;</div>                        <!-- PARA MOBILE --> 
            <div class="text_bottom">(exclusivo para o governo e empresas)</div>        <!-- PARA MOBILE --> 
        </div>
        <div class="descricao">Conheça nossos serviços (exclusivo para o governo e empresas)</div>  
    </div>
    <div class="container-servicos">
        <img class="fibra_icon" src="img/fibra-optica.png"/>
        <div class="h2-servico">Fibra Optica</div>
        <img class="joia_icon" src="img/joia.png" />
        <div class="h2-servico" >Link Dedicado</div>
        <img class="internet_icon_border" src="img/internet.png"/>
        <div class="h2-servico-border">Suporte em Redes</div>
        <div>&nbsp;</div>
        <div class ="li_links">
            <a class="li_texts" href="services/fibra-optica.php">
                Atuamos com instalação, conectorização e fusão de fibra utilizando as 
                mais modernas tecnologias disponiveis no mercado.
            </a>
        </div>
        <div>&nbsp;</div>
        <div class ="li_links">
            <a class="li_texts" href="services/link-dedicado.php">
                Alto nível de perfomance
                e de disponibilidade para
                seu uso ininterruptível.
            </a>
        </div>
        <div class="espaço">&nbsp;</div>
        <div class ="li_links-border">
            <a class="li_texts-border" href="services/suporte.php">
                Consultoria e suporte avançado
                <br>
                para seu  provedor, empresa ou projeto.
            </a>
        </div>
        <img class="wifi_icon" src="img/wifi.png"/>
        <div class="h2-servico">Banda Larga</div>
        <img class="radio_icon" src="img/radio.png"/>
        <div class="h2-servico">Radio Backup</div>
        <img class="wifi_lateral_icon_border" src="img/wifi_lateral.png"/>
        <div class="h2-servico-border">Link Temporário</div>
        <div>&nbsp;</div>
        <div class="li_links">
            <a class ="li_texts" href="services/banda-larga.php">
                O serviço ideal para licitações
                de grande volume.
            </a>
        </div>
        <div>&nbsp;</div>
        <div class="li_links">
            <a class ="li_texts" href="services/radio-backup.php">
                Backups de até 200Mbps para
                assegurar sua conexão independente
                de quaisquer problemas!
            </a>
        </div>
        <div class="espaço">&nbsp;</div>
        <div class="li_links-border">
            <a class ="li_texts-border" href="services/link-temporario.php">
                A solução perfeita para
                eventos, onde nós tratamos
                a integridade da sua rede durante o
                decorrer do mesmo.
            </a>
        </div>
        <!-- PARA MOBILE -->
        <img class="wifi_lateral_icon_under" src="img/wifi_lateral.png"/>
        <div class="h2-servico-under">Link Temporário</div> 
        <img class="internet_icon_under" src="img/internet.png"/>
        <div class="h2-servico-under">Suporte em Redes</div>
        <div>&nbsp;</div>
        <div class="li_links_under">
            <a class ="li_texts_under" href="services/link-temporario.php">
                A solução perfeita para
                eventos, onde nós tratamos
                a integridade da sua rede durante o
                decorrer do mesmo.
            </a>
        </div>
        <div>&nbsp;</div>
        <div class ="li_links_under">
            <a class="li_texts_under" href="services/suporte.php">
                Consultoria e suporte avançado
                <br>
                para seu  provedor, empresa ou projeto.
            </a>
        </div>
        <div>&nbsp;</div>
        <!-- PARA FIM MOBILE -->
    </div>
<!-- Atendimentos -->
    <div class="container-rodape">
         <div class="divisor">
            <img class="img-atendimento-left" src="img/atendimento-left.png">  
            <div class="clientes">
                <div class="column">
                    <div class="container-atendimentos">
                        <div class="title-atendimentos">
                            ATENDIMENTOS
                        </div>
                        <img class="logo-rix-atendimentos" src="img/logo-rix.png" alt="etiqueta" >
                    </div>
                    <div class="l1">
                        <a>
                            <img class="img-gvt" src="img/camara.svg"> 
                        </a>
                        <a>
                            <img class="img-gvt" src="img/rio-tinto.png"> 
                        </a>
                        <a target='_blank' href="https://paraiba.pb.gov.br/diretas/saude/projeto-amar">
                            <img class="img-SES" src="img/governo.svg">
                        </a>
                        <a target='_blank' href="https://www.oi.com.br/">
                            <img class="img-oi" src="img/oi.svg">
                        </a>

                        
                    </div>
                    <div class="l2">
                        <a target='_blank' href="https://www.conde.pb.gov.br/">
                            <img class="img-conde" src="img/conde.png">
                        </a>
                        <a target='_blank' href="https://procon.pb.gov.br/">
                            <img class="img-procon" src="img/procon.png">
                        </a>
                        <a target='_blank' href="https://www.tre-pb.jus.br/">
                            <img class="img-TRE" src="img/TRE.png">
                        </a>
                        <a target='_blank' href="https://www.defensoria.pb.def.br/">
                            <img class="img-dp" src="img/DP.png"> 
                        </a>
                    </div>
                </div> 
            </div>
            <img class="img-atendimento-right" src="img/atendimento-right.png"> 
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