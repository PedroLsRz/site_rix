<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link href="../css/index.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
<!-- NavBar -->
<?php include '../html/navbar.html';?>
<!-- Imagens Rotativas -->
    <section class="container">
        <div class="slider-wrapper" id="slider-focus">
            <div class="slider">
                <img id="slide-1" src="../img/acessibilidade.jpg" onclick="window.location.href='./rix-telecom.php'" alt="3D rendering of an imaginary orange planet in space" />
                <img id="slide-2" src="https://images.unsplash.com/photo-1657586640569-4a3d4577328c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1200&q=80" alt="3D rendering of an imaginary green planet in space" />
                <img id="slide-3" src="../img/empresa-slider.png" />
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
        <div class="envelopador"><div>PARA LICITAÇÃO</div></div>
        <h1>Nossos Serviços</h1>
        <div class="descricao">Conheça nossos serviços (para licitações da prefeitura e do Estado)</div>  
    </div>
    <div class="container-servicos">
        <img class="fibra_icon" src="../img/fibra-optica.png"/>
        <div class="h2-servico">Fibra Optica</div>
        <img class="joia_icon" src="../img/joia.png" />
        <div class="h2-servico" >Link Dedicado</div>
        <img class="internet_icon" src="../img/internet.png"/>
        <div class="h2-servico">Suporte em Redes</div>
        <div>&nbsp;</div>
        <div class ="li_links">
            <a class="li_texts" href="#">
                Atuamos com instalação, conectorização e fusão de fibra utilizando as 
                mais modernas tecnologias disponiveis no mercado.
            </a>
        </div>
        <div>&nbsp;</div>
        <div class ="li_links">
            <a class="li_texts" href="#">
                Alto nível de perfomance
                e de disponibilidade para
                seu uso ininterrupível.
            </a>
        </div>
        <div>&nbsp;</div>
        <div class ="li_links">
            <a class="li_texts" href="#">
                Consultoria e suporte avançado
                <br>
                para seu  provedor, empresa ou projeto.
            </a>
        </div>
        <img class="wifi_icon" src="../img/wifi.png"/>
        <div class="h2-servico">Banda Larga</div>
        <img class="radio_icon" src="../img/radio.png"/>
        <div class="h2-servico">Radio Backup</div>
        <img class="wifi_lateral_icon" src="../img/wifi_lateral.png"/>
        <div class="h2-servico">Link Temporário</div>
        <div>&nbsp;</div>
        <div class="li_links">
            <a class ="li_texts" href="#">
                O serviço ideal para licitações
                de grande volume.
            </a>
        </div>
        <div>&nbsp;</div>
        <div class="li_links">
            <a class ="li_texts" href="#">
                Backups de até 200Mbps para
                assegurar sua conexão independente
                de quaisquer problemas!
            </a>
        </div>
        <div>&nbsp;</div>
        <div class="li_links">
            <a class ="li_texts" href="#">
                A solução perfeita para
                eventos, onde nós tratamos
                a integridade da sua rede durante o
                decorrer do mesmo.
            </a>
        </div>      
    </div>
<!-- Atendimentos -->
    <div class="container-rodape">
         <div class="divisor">
            <img class="img-atendimento-left" src="../img/atendimento-left.png">  
            <div class="clientes">
                <a target='_blank' href="https://www.defensoria.pb.def.br/">
                    <img class="img-dp" src="../img/DP.png"> 
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
    </div>
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