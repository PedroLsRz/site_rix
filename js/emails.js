
      // TABELA DO SUPORTE 24H

var inputsNavs1_1 = document.getElementById("navinput1_1")
var inputsNavs1_2 = document.getElementById("navinput1_2")
var inputsNavs1_3 = document.getElementById("navinput1_3")
var textArea1 = document.getElementById("textArea1")
var formControl = document.getElementById("control-24h")
var btn24h = document.getElementById("btn-24h")
var ativadorLeft = document.getElementById("email-text-box-left")

  ativadorLeft.addEventListener("click", function() {
  
  if(formControl.style.height === "6vh") {
    formControl.style.height = "380px"; 
    inputsNavs1_1.style.display = "flex";
    inputsNavs1_2.style.display = "flex";
    inputsNavs1_3.style.display = "flex";
    textArea1.style.display = "flex";
    btn24h.style.display = "flex";
    btn24h.style.marginTop = "10px";
    btn24h.style.width = "70%";
    formControl.style.backgroundColor = "white";
    ativadorLeft.style.color = "#041545";
  }else{
    formControl.style.height = "6vh"; 
    inputsNavs1_1.style.display = "none";
    inputsNavs1_2.style.display = "none";
    inputsNavs1_3.style.display = "none";
    textArea1.style.display = "none";
    btn24h.style.display = "none";
    formControl.style.backgroundColor = "#041545";
    ativadorLeft.style.color = "white";
  }
  formControl.style.transition = "0.3s";
  

});

        // TABELA DO FINANCEIRO

var inputsNavs2_1 = document.getElementById("navinput2_1")
var inputsNavs2_2 = document.getElementById("navinput2_2")
var inputsNavs2_3 = document.getElementById("navinput2_3")
var textArea2 = document.getElementById("textArea2")
var controlFinanceiro = document.getElementById("control-financeiro")
var btnFinanceiro = document.getElementById("btn-financeiro")
var ativadorCenter = document.getElementById("email-text-box-center")

  ativadorCenter.addEventListener("click", function() {

  if(controlFinanceiro.style.height === "6vh") {
    controlFinanceiro.style.height = "380px"; 
    inputsNavs2_1.style.display = "flex";
    inputsNavs2_2.style.display = "flex";
    inputsNavs2_3.style.display = "flex";
    textArea2.style.display = "flex";
    btnFinanceiro.style.display = "flex";
    btnFinanceiro.style.marginTop = "10px";
    btnFinanceiro.style.width = "70%";
    controlFinanceiro.style.backgroundColor = "white";
    ativadorCenter.style.color = "#041545";
  }else{
    controlFinanceiro.style.height = "6vh"; 
    inputsNavs2_1.style.display = "none";
    inputsNavs2_2.style.display = "none";
    inputsNavs2_3.style.display = "none";
    textArea2.style.display = "none";
    btnFinanceiro.style.display = "none";
    controlFinanceiro.style.backgroundColor = "#041545";
    ativadorCenter.style.color = "white";
  }
  controlFinanceiro.style.transition = "0.3s";
  

});

        // TABELA DO COMERCIAL

var inputsNavs3_1 = document.getElementById("navinput3_1")
var inputsNavs3_2 = document.getElementById("navinput3_2")
var inputsNavs3_3 = document.getElementById("navinput3_3")
var textArea3 = document.getElementById("textArea3")
var controlComercial = document.getElementById("control-comercial")
var btnComercial = document.getElementById("btn-comercial")
var ativadorRight = document.getElementById("email-text-box-right")

  ativadorRight.addEventListener("click", function() {
  
  if(controlComercial.style.height === "6vh") {
    controlComercial.style.height = "380px"; 
    inputsNavs3_1.style.display = "flex";
    inputsNavs3_2.style.display = "flex";
    inputsNavs3_3.style.display = "flex";
    textArea3.style.display = "flex";
    btnComercial.style.display = "flex";
    btnComercial.style.marginTop = "10px";
    btnComercial.style.width = "70%";
    controlComercial.style.backgroundColor = "white";
    ativadorRight.style.color = "#041545";
  }else{
    controlComercial.style.height = "6vh"; 
    inputsNavs3_1.style.display = "none";
    inputsNavs3_2.style.display = "none";
    inputsNavs3_3.style.display = "none";
    textArea3.style.display = "none";
    btnComercial.style.display = "none";
    controlComercial.style.backgroundColor = "#041545";
    ativadorRight.style.color = "white";
  }
  controlComercial.style.transition = "0.3s";
  

});