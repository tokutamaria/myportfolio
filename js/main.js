"use strict"
{
  const open = document.getElementById('open');
  const close = document.getElementById('sp_nav');
  const overlay = document.querySelector('.accordion_content');
  const image = document.querySelector('.profile_image');
  const cb = function(entries, observer) {
    entries.forEach(entry => {
      if(entry.isIntersecting) {
        console.log('in view');
        entry.target.classList.add('left');
        observer.unobserve(entry.target);
      } else
        console.log('out view');
    });
  }
  const io = new IntersectionObserver(cb);
  io.observe(image);

  /* ハンバーガー オープン*/
  open.addEventListener('click', () => {
    overlay.classList.toggle('show');
    open.classList.toggle('active');
  });

  /* ハンバーガー クローズ*/
  close.addEventListener('click', () => {
    overlay.classList.remove('show');
    open.classList.remove('active');
  });

  /*自己紹介スクロール*/

}
