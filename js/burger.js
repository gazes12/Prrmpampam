const menu = document.querySelector('.header__menu');
document.addEventListener('click', (e) =>{
    if(e.target.classList.contains('burger')){
        menu.classList.toggle('active');
        e.target.classList.toggle('active');
    }
})