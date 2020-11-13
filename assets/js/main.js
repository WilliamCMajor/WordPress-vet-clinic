const clickbutton = document.querySelector('.toggle-icon');

clickbutton.addEventListener('click', function(){
    document.querySelector('header').classList.toggle('is-active')
})