//        VARIÁVEIS DOS TITULOS DA NAVBAR 

var headerItem = document.getElementById("cabecalho")
var ativadorItem = document.getElementById("menu-ativador")
var principalItem = document.getElementById("item_principal")
var navBottom = document.getElementById("nav-bottom")
//var headerMobile = document.getElementById("nav_titles")
var servicosItem = document.getElementById("item_servicos")
var contatosItem = document.getElementById("item_contatos")
var sobreItem = document.getElementById("item_sobre")
var faqItem = document.getElementById("item_faq")
// var numberItem = document.getElementById("0800")
// var iconItem = document.getElementById("icon-number")

//        FAUNÇÃO QUE ABRE A NAVBAR 

ativadorItem.addEventListener("click", function() {
  
  if(headerItem.style.height === "10vh") {
      headerItem.style.height = "520px"; 
      navBottom.style.display = "flex";
      // navBottom.style.flexDirection = "column";
      // principalItem.style.display = "flex";
      // headerMobile.style.display = "flex";
      // headerMobile.style.height = "6vh";
      // principalItem.style.height = "6vh"; 
      // servicosItem.style.display = "flex";
      // servicosItem.style.height = "6vh"; 
      // contatosItem.style.display = "flex"; 
      // sobreItem.style.display = "flex"; 
      // faqItem.style.display = "flex"; 


  }else if(headerItem.style.height === "520px") {
      headerItem.style.height = "10vh"; 
      navBottom.style.display = "none";
      // headerMobile.style.display = "none";
      // principalItem.style.display = "none"; 
      // servicosItem.style.display = "none"; 
      // contatosItem.style.display = "none"; 
      // sobreItem.style.display = "none"; 
      // faqItem.style.display = "none"; 
      // numberItem.style.display = "none"; 
      // iconItem.style.display = "none";
      
  }
  headerItem.style.transition = "0.3s";
  navBottom.style.transition = "0.3s";

});


//    VARIÁVEL DE ABERTURA DO PAINEL DE SERVIÇO

var painel = document.getElementById("painel")
var ativadorServico = document.getElementById("item_servicos")

//    FUNÇÃO DE ABERTURA DO PAINEL SERVIÇO

ativadorServico.addEventListener("click", function() {
  
  if(painel.style.display === "none") {
    painel.style.display = "flex"; 
    ativadorServico.style.height = "220px";
    contatosItem.style.display = "none";
    sobreItem.style.display = "none"; 
    faqItem.style.display = "none"; 

  }else{
    painel.style.display = "none";
    contatosItem.style.display = "flex";
    sobreItem.style.display = "flex"; 
    faqItem.style.display = "flex";
  }

});

//    VARIÁVEL DE ABERTURA DO PAINEL DE CONTATOS

var painelShort = document.getElementById("painel-short")
var ativadorContato = document.getElementById("item_contatos")

//    FUNÇÃO DE ABERTURA DO PAINEL DE CONTATOS

ativadorContato.addEventListener("click", function() {
  
  if(painelShort.style.display === "none") {
    painelShort.style.display = "flex"; 
    sobreItem.style.display = "none"; 
    faqItem.style.display = "none"; 

  }else{
    painelShort.style.display = "none";
    sobreItem.style.display = "flex"; 
    faqItem.style.display = "flex";
  }

});