;

/* ********** Toggle Navigation ********** */
((d, w, c, $) => {
  const menuBtn = d.querySelector('.Menu-btn'),
    menu = d.querySelector('.Menu'),
    mq64 = w.matchMedia('(min-width:64em)')

  function showMenu(mq) {
    if (mq.matches) {
      menu.classList.add('u-block')
      menu.classList.remove('u-none')
    } else {
      menu.classList.remove('u-block')
      menu.classList.add('u-none')
    }
  }

  w.addEventListener('load', showMenu(mq64))
  mq64.addListener(showMenu)

  menuBtn.addEventListener('click', e => {
    menu.classList.toggle('u-block')
    menu.classList.toggle('u-none')
  })
})(document, window, console.log, jQuery.noConflict());
