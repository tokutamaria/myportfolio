"use strict"
{
  const open = document.getElementById('open');
  const close = document.getElementById('close');
  const overlay = document.querySelector('.accordion_content');
  const nav = document.getElementById('sp_nav');

  open.addEventListener('click', () => {
    overlay.classList.add('show');
    open.classList.add('hide');
  });

  close.addEventListener('click', () => {
    overlay.classList.remove('show');
    open.classList.remove('hide');
  })

  nav.addEventListener('click', () => {
    overlay.classList.remove('show');
    open.classList.remove('hide');
  })

}
