//typing effect
var i = 0;
var j = 0;
var txt ='MERHABA, BEN SUDE ÇAKIR.';
var txt2='BİLGİSAYAR MÜHENDİSLİĞİ ÖĞRENCİSİ'
var speed = 100; 

function typeWriter() {
  if (i < txt.length) {
    document.querySelector(".header-header").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}

function typeWriter2() {
  if (j < txt2.length) {
    document.querySelector(".header-desc").innerHTML += txt2.charAt(j);
    j++;
    setTimeout(typeWriter2, speed);
  }
}

setTimeout(typeWriter, speed);
setTimeout(typeWriter2, speed);


//burger menu
var burger = document.querySelector(".burger");
var navLinks = document.querySelector('.nav-links');
burger.addEventListener('click', layoutHandler);

function layoutHandler(){
  if(navLinks.style.display == "block"){
    navLinks.style.display = "none";
  }else{
    navLinks.style.display = "block";
  }
}


//contact form control
function submitForm(){
  var name = document.querySelector('input[name="name"]');
  var surname = document.querySelector('input[name="surname"]');
  var email = document.querySelector('input[name="email"]');
  var select = document.querySelector('select[name="select"]');
  var message = document.querySelector('textarea[name="message"]');
  
  if(name.value == "" || surname.value == "" || email.value == "" || select.value == "empty" || message.value == ""){
    alert("Form elemanları boş olamaz. Lütfen formu dikkatli bir şekilde doldurunuz.");
    return false;
  }else{
    return true;
  }
}