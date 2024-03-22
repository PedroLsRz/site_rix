
let increase = document.getElementById('increase');
let decrease = document.getElementById('decrease');
let h3 = document.querySelector('h3');

let getfontsize = (el) => {
let size = window.getComputedStyle(el, null)
                .getPropertyValue('font-size');
return parseFloat(size);
}

increase.addEventListener('click', () => {
    h3.style.fontSize = (getfontsize(h3) + 1) + 'px';
})

decrease.addEventListener('click', () => {
    h3.style.fontSize = (getfontsize(h3) - 1) + 'px';
})