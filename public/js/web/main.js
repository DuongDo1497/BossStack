let menuMainParent = document.querySelector('.menu-main__parent');
let menuMainLink = document.querySelectorAll('.menu-main__link');
let navBar = document.querySelector('.nav-bars');

navBar.addEventListener('click', function (e) {
  if(!menuMainParent.classList.contains('checked')){
    menuMainParent.classList.add('checked');
  }else{
    menuMainParent.classList.remove('checked');
  }
})

menuMainLink.forEach(element => {
  element.addEventListener('click', function(e){
    let menuMainChild = e.currentTarget.parentElement.querySelector('.menu-main__child');
    if (window.outerWidth >= 992) {
      if (menuMainChild) {
        e.preventDefault();
        if(!element.matches('.active')){
          element.classList.add('active');
          menuMainChild.style.visibility = 'visible';
          menuMainChild.classList.add('animate__slideInUp');
          menuMainChild.classList.remove('animate__slideOutDown');
        }else{
          element.classList.remove('active');
          setTimeout(() => {
            menuMainChild.style.visibility = 'hidden';
          }, 1500);
          menuMainChild.classList.add('animate__slideOutDown');
          menuMainChild.classList.remove('animate__slideInUp');
        }
      }
    } else if (window.outerWidth < 992) {
      menuMainChild.classList.remove('animate__animated');
      if (menuMainChild) {
        e.preventDefault();
        if(!element.matches('.active')){
          element.classList.add('active');
          menuMainChild.style.visibility = 'visible';
          menuMainChild.style.maxHeight = menuMainChild.scrollHeight + "px";
        }else{
          element.classList.remove('active');
          menuMainChild.style.visibility = 'hidden';
          menuMainChild.style.maxHeight = null;
        }
      }
    }
  })
})

window.addEventListener("scroll", function (e) {
  if (e.currentTarget.pageYOffset > 50) {
    document.querySelector(".header").classList.add("fixed");
    document.querySelector(".header").classList.add("animate__slideInDown");
    document.querySelector(".backtotop").classList.add("animate__zoomIn");
    document.querySelector(".backtotop").classList.remove("animate__zoomOut");
  } else {
    document.querySelector(".header").classList.remove("fixed");
    document.querySelector(".header").classList.remove("animate__slideInDown");
    document.querySelector(".backtotop").classList.add("animate__zoomOut");
    document.querySelector(".backtotop").classList.remove("animate__zoomIn");
  }
});

document.querySelector(".backtotop").addEventListener("click", function (e) {
  e.preventDefault();
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
});


