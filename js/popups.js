/*PopupCheckSiteContent*/
const popupCheckSiteContent = document.querySelector('.popup-checkSiteContent');
const close_popupCheckSiteContent = document.querySelector('.popup-checkSiteContent__close');
const open_popupCheckSiteContent = document.querySelectorAll('.slide-left__button');


close_popupCheckSiteContent.onclick = () =>{
    popupCheckSiteContent.classList.remove('active');
}

open_popupCheckSiteContent.forEach(btn =>{
    btn.onclick = () =>{
        popupCheckSiteContent.classList.add('active');

        /*Добавление контента*/
        const slideName = document.querySelector('.contentSite__name');
        const slideDescription = document.querySelector('.contentSite__description');
        const slideImage = document.querySelector('.contentSite__image');


        slideName.innerText = btn.previousElementSibling.previousElementSibling.innerText;
        slideDescription.innerText = btn.previousElementSibling.innerText;
    }
});



