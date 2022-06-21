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
    }
});