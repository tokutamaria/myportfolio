"use strict"
{
  const open = document.getElementById('open');                   /* ハンバーガー オープン*/
  const close = document.getElementById('sp_nav');                /* ハンバーガー クローズ*/
  const overlay = document.querySelector('.accordion_content');   /* ハンバーガー メニュー*/
  const windowWidth = document.documentElement.clientWidth;       /* 画面幅 */
  const sp = 768;                                                 /* レスポンシブ画面幅 */
  const image = document.querySelector('.profile_image');         /*自己紹介 写真*/
  const profile = document.querySelector('.profile_text');        /*自己紹介 テキスト*/
  const works = document.querySelectorAll(".work_content");       /* 仕事 */

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

  window.addEventListener('resize', function(){
    if (windowWidth > sp ) {
      overlay.classList.remove('show');
      open.classList.remove('active');
    }
  });

  /*自己紹介スクロール*/
  const about_left = function(entries, observer) {
    entries.forEach(entry => {
      if(entry.isIntersecting) {
        entry.target.classList.add('left');
        observer.unobserve(entry.target);
      }
    });
  }

  const about_right = function(entries, observer) {
    entries.forEach(entry => {
      if(entry.isIntersecting) {
        entry.target.classList.add('right');
        observer.unobserve(entry.target);
      }
    });
  }

  const iol = new IntersectionObserver(about_left);
  const ior = new IntersectionObserver(about_right);
  iol.observe(image);
  ior.observe(profile);

  /* 仕事 */
  works.forEach(wk => {
    const text = wk.querySelector('.work_text');
    const img = wk.querySelector('.work_img');
    const work_cb = function(entries) {
      entries.forEach(entry => {
        if(entry.isIntersecting) {
          entry.target.classList.add('work_show');
        }
      });
    }

    const work = new IntersectionObserver(work_cb);
    work.observe(text);
    work.observe(img);
  });
}
