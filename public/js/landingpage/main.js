$('.review__carousel').owlCarousel({
  items: 1,
  dots: true,
  margin: 30,
  loop: true,
  smartSpeed: 1000,
  animateOut: 'animate__fadeOutDown',
  animateIn: 'animate__fadeInUp',
  responsiveClass:true,
  navText: [
    "<i class='fa-solid fa-angle-left'></i>",
    "<i class='fa-solid fa-angle-right'></i>"
  ],
  responsive:{
    0:{
      nav: false,
      autoplay: true,
      mouseDrag: true,
      autoplaySpeed: 1500,
    },
    992: {
      nav: true,
      autoplay: false,
      mouseDrag: false,
    }
  },
})

AOS.init();

let getHeader = document.querySelector('.header');
let getBackToTop = document.querySelector('.backtotop');
window.addEventListener('scroll', function (e){
  if (e.currentTarget.scrollY > 50) {
    getHeader.classList.add('fixed');
    getBackToTop.classList.add('show');
    getBackToTop.classList.remove('hide');
  } else {
    getHeader.classList.remove('fixed');
    getBackToTop.classList.add('hide');
    getBackToTop.classList.remove('show');
  }
})

getBackToTop.addEventListener('click', function (e){
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
})

let getSolutionForm = document.querySelector('.solution-register__form');
let getPopupForm = document.querySelector('.popup-register__body');
let getDays = document.querySelectorAll('.days');
let getHours = document.querySelectorAll('.hours');
let getMinutes = document.querySelectorAll('.minutes');
let getSeconds = document.querySelectorAll('.seconds');
let countDownDate = new Date("2022, 11, 30").getTime();

// Update the count down every 1 second
let countDown = setInterval(function() {
  let now = new Date().getTime();

  // Find the distance between now and the count down date
  let distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  let day = Math.floor(distance / (1000 * 60 * 60 * 24));
  let hour = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  let minute = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  let second = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with 
  getDays.forEach(element =>  {
    if (distance < 0){
      element.querySelector('.number').innerHTML = '00';
    }else{
      element.querySelector('.number').innerHTML = day;
    }
  })
  getHours.forEach(element =>  {
    if (distance < 0){
      element.querySelector('.number').innerHTML = '00';
    }else{
      element.querySelector('.number').innerHTML = hour;
    }
  })
  getMinutes.forEach(element =>  {
    if (distance < 0){
      element.querySelector('.number').innerHTML = '00';
    }else{
      element.querySelector('.number').innerHTML = minute;
    }
  })
  getSeconds.forEach(element =>  {
    if (distance < 0){
      element.querySelector('.number').innerHTML = '00';
    }else{
      element.querySelector('.number').innerHTML = second;
    }
  })

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(countDown);
    getSolutionForm.querySelector('.btn-register').disabled = true;
    getPopupForm.querySelector('.btn-register').disabled = true;
  }
}, 1000);

let getPopupRegister = document.querySelector('.popup-register');
let getClosePopup = getPopupRegister.querySelector('.close-popup');
setTimeout(function(){
  if (getPopupRegister.className.includes('hide')) {
    getPopupRegister.classList.remove('hide');
  }
}, 1000)

getClosePopup.addEventListener('click', function (e) {
  getPopupRegister.classList.add('hide');
})