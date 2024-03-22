
let increase = document.getElementById('increase');
let decrease = document.getElementById('decrease');
let h1 = document.getElementById('mid-text');

let getfontsize = (el) => {
let size = window.getComputedStyle(el, null)
                .getPropertyValue('font-size');
return parseFloat(size);
}

increase.addEventListener('click', () => {
    h1.style.fontSize = (getfontsize(h1) + 1) + 'px';
})

decrease.addEventListener('click', () => {
    h1.style.fontSize = (getfontsize(h1) - 1) + 'px';
})