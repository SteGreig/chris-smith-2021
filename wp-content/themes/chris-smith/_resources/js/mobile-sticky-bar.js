

var prevScrollpos = window.pageYOffset;
var el = document.querySelector(".mob-fixed-bar")

document.addEventListener(
  'scroll',
  (event) => {

    var scrollTop = window.pageYOffset

    if (scrollTop > 500) {

      var currentScrollPos = window.pageYOffset;
      if (prevScrollpos > currentScrollPos) {
        el.classList.add('flex')
        el.classList.remove('hidden')
      } else {
        el.classList.remove('flex')
        el.classList.add('hidden')
      }
      prevScrollpos = currentScrollPos;

    } else {
      el.classList.remove('flex')
      el.classList.add('hidden')
    }
    
  }, 
  { passive: true }
);