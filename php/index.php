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

<?php include '../html/navbar.html';?>

    <section class="container">
        <div class="slider-wrapper" id="slider-focus">
            <div class="slider">
                <img id="slide-1" src="../img/adinael-menor.jpeg" onclick="window.location.href='./rix-telecom.php'" alt="3D rendering of an imaginary orange planet in space" />
                <img id="slide-2" src="https://images.unsplash.com/photo-1657586640569-4a3d4577328c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1200&q=80" alt="3D rendering of an imaginary green planet in space" />
                <img id="slide-3" src="https://images.unsplash.com/photo-1656077217715-bdaeb06bd01f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1200&q=80" alt="3D rendering of an imaginary blue planet in space" />
            </div>
            <div class="slider-nav">
                <a href="#slide-1"></a>
                <a href="#slide-2"></a>
                <a href="#slide-3"></a>
            </div>
        </div>
    </section>
    
    <div class="titulo-licitacao">
    <div class="envelopador"><div>PARA LICITAÇÃO</div></div>
    <h1>Nossos Serviços</h1>
        <div class="descricao">Conheça nossos serviços (para licitações da prefeitura e do Estado)</div>  
 
    </div> 
    
          
    
    <div class="container-servicos">
        <ul class="ul_servicos">
                    <div>Fibra Optica</div>
                    <li class="li_servicos">
                        <img class="wifi_icon" src="../img/wifi.png" /><a target='_blank' class="li_links"
                        href="#">Bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
                    </a></i>
                    
                    </li>
                    <div>Link Dedicado</div>
                    <li class="menu-item">
                        <a target='_blank' href='#' class="li_links">WhatsApp</a>
                    </li>
                </ul>
                
                <ul class="ul_servicos">
                <div>Ponto a Ponto</div>
                    <li class="li_servicos">
                        <a href="#" class="li_links">A Rix</a> 
                    </li>
                    <div>Link Temporário</div>
                    <li class="li_servicos">
                        <a href="#" class="li_links">A Rix</a>
                    </li>
                </ul>
                <ul class="ul_servicos">
                <div>Banda Larga</div>
                    <li class="li_servicos">
                        <a href="#" class="li_links">A Rix</a> 
                    </li>
                    <div>Radio Backup</div>
                    <li class="li_servicos">
                        <a href="#" class="li_links">A Rix</a>
                    </li>
                </ul>
        </div>
    <?php include '../html/buttonzap.html';?>

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

<footer>
<?php include '../html/rodape.html';?>
</footer>

<script src="../js/index.js"></script>
<script src="../js/fontsize.js"></script>
</body>
</html>