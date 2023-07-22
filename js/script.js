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


regiterLink.addEventListener('click',() => {
    wrapper.classList.add('active');
});
loginLink.addEventListener('click',() => {
    wrapper.classList.remove('active');
});