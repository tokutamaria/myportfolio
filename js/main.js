"use strict"
{
  const visual = document.getElementById('key_visual');           /* キービジュアル */
  const head = document.getElementById('header');                 /* ヘッダー */
  const open = document.getElementById('open');                   /* ハンバーガー オープン */
  const close = document.getElementById('sp_nav');                /* ハンバーガー クローズ */
  const overlay = document.querySelector('.header_nav');          /* ハンバーガー メニュー */
  const windowWidth = document.documentElement.clientWidth;       /* 画面幅 */
  const sp = 768;                                                 /* レスポンシブ画面幅 */
  const image = document.querySelector('.profile_image');         /* 自己紹介 写真 */
  const profile = document.querySelector('.profile_text');        /* 自己紹介 テキスト */
  const works = document.querySelectorAll(".work_content");       /* 仕事 */
  const contacts = document.querySelectorAll('#contact');         /* お問い合わせ */
  const skills = document.querySelector('.skill_list');           /* スキル */
  const top = document.getElementById('page_top');                /* ページ先頭に戻る */
  const links = document.querySelectorAll('a[href^="#"]');

  /* キービジュアル */
  window.addEventListener('load', () => {
    visual.classList.add('view');
  });

  /* ヘッダー */
  window.addEventListener('DOMContentLoaded', function() {
    head.style.visibility = 'hidden';
    window.addEventListener('scroll' , function() {
      if(100 < window.scrollY) {
        head.style.visibility = 'visible';
        head.classList.add('view');
      } else {
        head.classList.remove('view');
      }
    });
  });

  /* ハンバーガー オープン */
  open.addEventListener('click', () => {
    overlay.classList.toggle('show');
    open.classList.toggle('active');
  });

  /* ハンバーガー クローズ */
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

  /* 自己紹介 */
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

  /* スキル */
  const skill_li = function(entries) {
    entries.forEach(entry => {
      if(entry.isIntersecting) {
        entry.target.classList.add('skill_show');
      }
      });
    }

      const sk = new IntersectionObserver(skill_li);
      sk.observe(skills);

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

  /* お問い合わせ */
  contacts.forEach(ct => {
    const name = ct.querySelector('.contact_name');
    const mail = ct.querySelector('.contact_mail');
    const massage = ct.querySelector('.contact_massage');
    const btn =ct.querySelector('.contact_btn');
    const contact_form = function(entries , observer) {
      entries.forEach (entry => {
        if(entry.isIntersecting) {
          entry.target.classList.add('contact_show');
        }
      });
    }
    const con = new IntersectionObserver(contact_form);
    con.observe(name);
    con.observe(mail);
    con.observe(massage);
    con.observe(btn);
  });

  /* ページ先頭に戻る */
  window.addEventListener('DOMContentLoaded' , function() {
    top.style.visibility = 'hidden';
    top.addEventListener('transitionend', function() {
      if (top.className !== 'view') {
        top.style.visibility = 'hidden';
      }
    });
    window.addEventListener('scroll', function() {
      if( 100 < window.scrollY) {
        top.style.visibility = 'visible';
        top.classList.add('view');
      } else {
        top.classList.remove('view');
      }
    });
  });

  /* スクロール */
  document.addEventListener('click' , e => {
    const target = e.target;
    if (!target.classList.contains('link')) return;
    e.preventDefault();
    const targetId = target.hash;
    const targetElement = document.querySelector(targetId);
    const rectTop = targetElement.getBoundingClientRect().top;
    const offsetTop = window.pageYOffset;
    const buffer = 50;
    const top = rectTop + offsetTop - buffer;
    
    window.scroll({
      top: top,
      behavior: 'smooth'
    });
  });

  links.forEach(link => {
    link.addEventListener('click' , (e) => {
      e.preventDefault();
      window.scroll( {
        top: 0,
        behavior: 'smooth'
      });
    });
  });
}
