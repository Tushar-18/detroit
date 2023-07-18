let menutoggle=document.querySelector('.menutoggle')
let header=document.querySelector('header')
menutoggle.onclick= function(){
  header.classList.toggle('active')
}