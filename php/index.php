<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link href="../css/index.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="shortcut icon" href="../ico/favicon.ico" type="image/x-icon">
</head>
<body>
<?php include '../html/navbar.html';?>      <!-- NavBar -->
<!-- Imagens Rotativas -->
    <section class="container">
        <div class="slider-wrapper" id="slider-focus">
            <div class="slider">
                <img id="slide-1" src="../img/acessibilidade.jpg" onclick="window.location.href='./acessibilidade.php'" alt="3D rendering of an imaginary orange planet in space" />
                <img id="slide-2" src="../img/foto-emails.jpeg" onclick="window.location.href='./emails.php'" />
                <img id="slide-3" src="../img/business.png" onclick="window.location.href='./rix-telecom.php'"/>
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
        <img class="fibra_icon" src="../img/fibra-optica.png"/>
        <div class="h2-servico">Fibra Optica</div>
        <img class="joia_icon" src="../img/joia.png" />
        <div class="h2-servico" >Link Dedicado</div>
        <img class="internet_icon_border" src="../img/internet.png"/>
        <div class="h2-servico-border">Suporte em Redes</div>
        <div>&nbsp;</div>
        <div class ="li_links">
            <a class="li_texts" href="../services/fibra-optica.php">
                Atuamos com instalação, conectorização e fusão de fibra utilizando as 
                mais modernas tecnologias disponiveis no mercado.
            </a>
        </div>
        <div>&nbsp;</div>
        <div class ="li_links">
            <a class="li_texts" href="../services/link-dedicado.php">
                Alto nível de perfomance
                e de disponibilidade para
                seu uso ininterruptível.
            </a>
        </div>
        <div class="espaço">&nbsp;</div>
        <div class ="li_links-border">
            <a class="li_texts-border" href="../services/suporte.php">
                Consultoria e suporte avançado
                <br>
                para seu  provedor, empresa ou projeto.
            </a>
        </div>
        <img class="wifi_icon" src="../img/wifi.png"/>
        <div class="h2-servico">Banda Larga</div>
        <img class="radio_icon" src="../img/radio.png"/>
        <div class="h2-servico">Radio Backup</div>
        <img class="wifi_lateral_icon_border" src="../img/wifi_lateral.png"/>
        <div class="h2-servico-border">Link Temporário</div>
        <div>&nbsp;</div>
        <div class="li_links">
            <a class ="li_texts" href="../services/banda-larga.php">
                O serviço ideal para licitações
                de grande volume.
            </a>
        </div>
        <div>&nbsp;</div>
        <div class="li_links">
            <a class ="li_texts" href="../services/radio-backup.php">
                Backups de até 200Mbps para
                assegurar sua conexão independente
                de quaisquer problemas!
            </a>
        </div>
        <div class="espaço">&nbsp;</div>
        <div class="li_links-border">
            <a class ="li_texts-border" href="../services/link-temporario.php">
                A solução perfeita para
                eventos, onde nós tratamos
                a integridade da sua rede durante o
                decorrer do mesmo.
            </a>
        </div>
        <!-- PARA MOBILE -->
        <img class="wifi_lateral_icon_under" src="../img/wifi_lateral.png"/>
        <div class="h2-servico-under">Link Temporário</div> 
        <img class="internet_icon_under" src="../img/internet.png"/>
        <div class="h2-servico-under">Suporte em Redes</div>
        <div>&nbsp;</div>
        <div class="li_links_under">
            <a class ="li_texts_under" href="../services/link-temporario.php">
                A solução perfeita para
                eventos, onde nós tratamos
                a integridade da sua rede durante o
                decorrer do mesmo.
            </a>
        </div>
        <div>&nbsp;</div>
        <div class ="li_links_under">
            <a class="li_texts_under" href="../services/suporte.php">
                Consultoria e suporte avançado
                <br>
                para seu  provedor, empresa ou projeto.
            </a>
        </div>
        <div>&nbsp;</div>
        <!-- PARA FIM MOBILE -->
    </div>
<!-- Atendimentos -->
    <!-- <div class="container-rodape">
         <div class="divisor">
            <img class="img-atendimento-left" src="../img/atendimento-left.png">  
            <div class="clientes">
                <a target='_blank' href="https://www.defensoria.pb.def.br/">
                    <img class="img-dp" src="../img/DP.png"> 
                </a>
                <a>
                    <img class="img-gvt" src="../img/logo-GVT.png"> 
                </a>
                <a>
                    <img class="img-gvt" src="../img/rio-tinto.png"> 
                </a>
                <a target='_blank' href="https://paraiba.pb.gov.br/diretas/saude/projeto-amar">
                    <img class="img-SES" src="../img/SES.png">
                </a>
                <a target='_blank' href="https://www.oi.com.br/">
                    <img class="img-oi" src="../img/oi.png">
                </a>
                <a target='_blank' href="https://www.conde.pb.gov.br/">
                    <img class="img-conde" src="../img/conde.png">
                </a>
                <a target='_blank' href="https://procon.pb.gov.br/">
                    <img class="img-procon" src="../img/procon.png">
                </a>
                <a target='_blank' href="https://www.tre-pb.jus.br/">
                    <img class="img-TRE" src="../img/TRE.png">
                </a>
            </div>
            <img class="img-atendimento-right" src="../img/atendimento-right.png"> 
        </div>
    </div> -->
<!-- Botão do WhatsApp -->
    <?php include '../html/buttonzap.html';?>
<!-- Rodapé -->
<footer>
<?php include '../html/rodape.html';?>
</footer>

<script src="../js/index.js"></script>
<script src="../js/fontsize.js"></script>
</body>
</html>