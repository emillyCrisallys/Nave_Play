
var menuItem = document.querySelectorAll('.item-menu')

function selectlink() {
    menuItem.forEach((item) =>
        item.classList.remove('ativo'))
    this.classList.add('ativo')
}

menuItem.forEach((item) =>
    item.addEventListener('click', selectlink)
)

//Expandir Menu
var btnExp = document.querySelector('#btn-exp')
var menusite = document.querySelector('.menu-lateral')

btnExp.addEventListener('click', function () {
    menusite.classList.toggle('expandir')//toggle verifica se a função de expandir está ativa ou não

})