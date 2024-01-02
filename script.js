let menu = document.querySelector('#menu-icone')
let navbar=document.querySelector('.navbar');

menu.onclock = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('active');
};

window.onscroll = () =>{
    menu.classList.remove('bx-x');
    navbar.classList.remove('active');
};
  