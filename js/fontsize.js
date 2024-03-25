
// NAVBAR START
let increase = document.getElementById('increase');
let decrease = document.getElementById('decrease');
let principal = document.getElementById('item_principal');
let servicos = document.getElementById('item_servicos');
let contatos = document.getElementById('item_contatos');
let sobre = document.getElementById('item_sobre');
let faq = document.getElementById('item_faq');
let h3 = document.querySelector('h3');

    // NAVBAR END & RODAPE START
let linksRapidos = document.getElementById('menu-links_rapidos');
let sobreNos = document.getElementById('menu-sobre');
let faleConosco = document.getElementById('menu-fale_conosco');

    // RODAPE END & RIX TELECOM START
let textRixTelecom = document.getElementById('mid-text');
let h1RixTelecom = document.querySelector('h1');

// RIX TELECOM END & ACESSIBILIDADE START
let acessivel = document.getElementById('container-acessibilidades');
// ACESSIBILIDADE END

// FUNÇÃO
let getfontsize = (el) => {
let size = window.getComputedStyle(el, null)
                .getPropertyValue('font-size');
return parseFloat(size);
}

increase.addEventListener('click', () => {
    // NAVBAR START
    principal.style.fontSize = (getfontsize(principal) + 1) + 'px';
    servicos.style.fontSize = (getfontsize(servicos) + 1) + 'px';
    contatos.style.fontSize = (getfontsize(contatos) + 1) + 'px';
    sobre.style.fontSize = (getfontsize(sobre) + 1) + 'px';
    faq.style.fontSize = (getfontsize(faq) + 1) + 'px';
    h3.style.fontSize = (getfontsize(h3) + 1) + 'px';
    // NAVBAR END & RODAPE START
    linksRapidos.style.fontSize = (getfontsize(linksRapidos) + 1) + 'px';
    sobreNos.style.fontSize = (getfontsize(sobreNos) + 1) + 'px';
    faleConosco.style.fontSize = (getfontsize(faleConosco) + 1) + 'px';
    // RODAPE END & RIX TELECOM START
    textRixTelecom.style.fontSize = (getfontsize(textRixTelecom) + 1) + 'px';
    h1RixTelecom.style.fontSize = (getfontsize(h1RixTelecom) + 1) + 'px';
    // RIX TELECOM END & ACESSIBILIDADE START
    acessivel.style.fontSize = (getfontsize(acessivel) + 1) + 'px';

})

decrease.addEventListener('click', () => {
    // NAVBAR START
    principal.style.fontSize = (getfontsize(principal) - 1) + 'px';
    servicos.style.fontSize = (getfontsize(servicos) - 1) + 'px';
    contatos.style.fontSize = (getfontsize(contatos) - 1) +  'px';
    sobre.style.fontSize = (getfontsize(sobre) - 1) + 'px';
    faq.style.fontSize = (getfontsize(faq) - 1) + 'px';
    h3.style.fontSize = (getfontsize(h3) - 1) + 'px';
    // NAVBAR END & RODAPE START
    linksRapidos.style.fontSize = (getfontsize(linksRapidos) - 1) + 'px';
    sobreNos.style.fontSize = (getfontsize(sobreNos) - 1) + 'px';
    faleConosco.style.fontSize = (getfontsize(faleConosco) - 1) + 'px';
    // RODAPE END & RIX TELECOM START
    textRixTelecom.style.fontSize = (getfontsize(textRixTelecom) - 1) + 'px';
    h1RixTelecom.style.fontSize = (getfontsize(h1RixTelecom) - 1) + 'px';
    // RIX TELECOM END & ACESSIBILIDADE START
    acessivel.style.fontSize = (getfontsize(acessivel) - 1) + 'px';
})