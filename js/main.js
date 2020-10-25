"use strict"
{
  const open = document.getElementById('open');
  const overlay = document.querySelector('.accordion_content');
  const nav = document.getElementById('sp_nav');

  open.addEventListener('click', () => {
    overlay.classList.toggle('show');
    open.classList.toggle('active');
  });

  nav.addEventListener('click', () => {
    overlay.classList.remove('show');
  });

}
