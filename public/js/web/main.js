let menuMainParent = document.querySelector('.menu-main__parent');
let menuMainLink = document.querySelectorAll('.menu-main__link');

menuMainLink.forEach(element => {
  element.addEventListener('click', function(e){
    e.preventDefault();
    let menuMainChild = e.currentTarget.parentElement.querySelector('.menu-main__child');
    if (menuMainChild) {
      if(!element.matches('.active')){
        element.classList.add('active');
        menuMainChild.style.visibility = 'visible';
        menuMainChild.classList.add('animate__slideInUp')
        menuMainChild.classList.remove('animate__slideOutDown')
      }else{
        element.classList.remove('active')
        setTimeout(() => {
          menuMainChild.style.visibility = 'hidden';
        }, 1500);
        menuMainChild.classList.add('animate__slideOutDown')
        menuMainChild.classList.remove('animate__slideInUp')
      }
    }
  })
})


