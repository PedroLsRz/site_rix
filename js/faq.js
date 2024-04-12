var titleCpf = document.getElementById("cpf")
var textCpf = document.getElementById("r-cpf")
var titleCentral = document.getElementById("central")
var textCentral = document.getElementById("r-central")
var titleProposta = document.getElementById("proposta")
var textProposta = document.getElementById("r-proposta")

//    FUNÇÃO DE ABERTURA DA RESPOSTA CPF

titleCpf.addEventListener("click", function() {
  
  if(textCpf.style.display === "flex") {
    textCpf.style.display = "none";

  }else{

    textCpf.style.display = "flex"; 
  }

});

//    FUNÇÃO DE ABERTURA DA RESPOSTA CENTRAL

titleCentral.addEventListener("click", function() {
  
    if(textCentral.style.display === "flex") {
        textCentral.style.display = "none";
  
    }else{
  
        textCentral.style.display = "flex"; 
    }
  
  });
  
//    FUNÇÃO DE ABERTURA DA RESPOSTA PROPOSTA

titleProposta.addEventListener("click", function() {
  
    if(textProposta.style.display === "flex") {
        textProposta.style.display = "none";
  
    }else{
  
        textProposta.style.display = "flex"; 
    }
  
  });