let scrollTop=document.querySelector('.scroll-top');

window.onscroll = () =>{
    if(window.scrollY > 350){
        scrollTop.style.display = 'initial';
    }
    else{
        scrollTop.style.display = 'none';
    }
}
const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const regiterLink = document.querySelector('.register-link');
const btnPopup = document.querySelector('.btnLogin-popup');
const iconClose = document.querySelector('.icon-close');


regiterLink.addEventListener('click',() => {
    wrapper.classList.add('active');
});
loginLink.addEventListener('click',() => {
    wrapper.classList.remove('active');
});
btnPopup.addEventListener('click',() => {
    wrapper.classList.add('active-popup');
});
iconClose.addEventListener('click',() => {
    wrapper.classList.remove('active-popup')
});