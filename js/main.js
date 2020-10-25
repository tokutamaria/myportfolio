"use strict"
{
  const open = document.getElementById('open');
  const overlay = document.querySelector('.accordion_content');
  const ul = document.getElementById('sp_nav');

  open.addEventListener('click', () => {
    overlay.classList.toggle('show');
    open.classList.toggle('active');
  });

  ul.addEventListener('click', () => {
    overlay.classList.remove('show');
    open.classList.remove('active');
  });

}
