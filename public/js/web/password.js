let getFormPass = document.querySelector('.form-password');
let getInputPass = getFormPass.querySelector('#password');
let iconShowPass = getFormPass.querySelector('.icon-show');

iconShowPass.addEventListener('click', function(){
  if (iconShowPass.querySelector('i').getAttribute('class') === 'fa-solid fa-eye') {
    iconShowPass.querySelector('i').setAttribute('class', 'fa-solid fa-eye-slash');
    getInputPass.setAttribute('type', 'text')
  }else{
    iconShowPass.querySelector('i').setAttribute('class', 'fa-solid fa-eye');
    getInputPass.setAttribute('type', 'password')
  }
})