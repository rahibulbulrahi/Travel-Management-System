let header = document.querySelector('.header');
let bubbleMenu = document.querySelector('.bubble-menu');

bubbleMenu.addEventListener('click',function()
{
    header.classList.toggle('menu-open');
})