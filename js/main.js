"use strict"
{
  const open = document.getElementById('open');
  const overlay = document.querySelector('.accordion_content');
  const nav = document.getElementById('sp_nav');

  open.addEventListener('click', () => {
    overlay.classList.toggle('show');
    open.classList.toggle('active');
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
