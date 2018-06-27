// JavaScript Document

// Menu JS
const body = document.body;
const hamburger = document.querySelector('.btn-menu');
const bar = document.querySelector('.fa-bars');

hamburger.addEventListener('click', showMenu);

function showMenu(){
    body.classList.toggle('show');
    bar.classList.toggle('animate');
}
