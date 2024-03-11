/*  const $formControl = document.querySelector(".form-control")
  const $inputsNavs = document.querySelector(".inputs-navs")
  const $button = document.querySelector("button")
  const $emailTextBox = document.querySelector(".email-text-box")
  const $textArea = document.querySelector("textarea")

    function crescimento(){
      $formControl.style.height = "380px";
      $formControl.style.transition = "0.3s";
      $formControl.style.backgroundColor = "white";
      $formControl.style.Zindex = "1";
      $inputsNavs.style.display = "flex";
      $emailTextBox.style.display = "none";
      $button.style.display = "flex";
      $textArea.style.display = "flex";
    }*/

    var inputsNavs = document.getElementById("navinput")
    var formControl = document.getElementById("control");
    var ativador = document.getElementById("email-text-box-left")
    ativador.addEventListener("click", function() {

        
       if(formControl.style.height === "6vh") {
         formControl.style.height = "380px"; 
         inputsNavs.style.display = "flex";
       }else{
         formControl.style.height = "6vh"; 
         inputsNavs.style.display = "none";
       }
        formControl.style.transition = "0.3s";
       

    });