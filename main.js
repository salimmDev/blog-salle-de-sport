//--------------------------------------------------MENU NAVBAR SCROLL COLOR--------------------------------------------------//
    window.addEventListener('scroll', function () {
    let header = document.querySelector('header');
    let windowPosition = window.scrollY > 0;
    header.classList.toggle('scrolling-active', windowPosition);
})


//--------------------------------------------------MENU  HAMBURGER--------------------------------------------------//
 function toggleMenu(){
    const navbar = document.querySelector('.navbar');
    const burger = document.querySelector('.burger');

    burger.addEventListener("click", (e) => {
    navbar.classList.toggle('show-nav')
    });
}   
toggleMenu(); 


//--------------------------------------------------FORMULAIRE--------------------------------------------------//
let prenom = document.getElementById("name"); 
let family = document.getElementById("family"); 
let numeros = document.getElementById("numeros"); 
let mail = document.getElementById("mail"); 
let sujet = document.getElementById("sujet"); 
let message = document.getElementById("message"); 
let myForm = document.getElementById("myForm"); 

let error_prenom = document.getElementById("error_name"); 
let error_family = document.getElementById("error_family"); 
let error_numeros = document.getElementById("error_numeros");  
let error_mail = document.getElementById("error_mail");  
let error_sujet = document.getElementById("error_sujet");
let error_message = document.getElementById("error_message");

let myRegex = /^[a-zA-Z-\s]+$/;  
let myRegexNumber = /^[0-9-\s]+$/; 
let myRegexmail = /^\w+([.-]?\w+)@\w+([.-]?\w+)(.\w{2,3})+$/; 

     myForm.addEventListener("submit" , valid_f);

 function valid_f(e){
   
      //prenom
      if(prenom.value === "") {
        error_name.innerHTML = "Veuillez saisire votre prénom !";
        error_name.style.color = " red";
        prenom.style.borderColor = "red";
        e.preventDefault();
      } else if (!myRegex.test(prenom.value)) {
        error_name.innerHTML = "Veuillez enterz une auter valeur !";
        error_name.style.color = "red";
        prenom.style.borderColor = "red";
        e.preventDefault();
      } else {
        error_name.innerHTML = "";
        error_name.style.color = "green";
        prenom.style.borderColor = "green";
      }

        
        //Form nom de famille
        if (family.value === "") {
            error_family.innerHTML = "Veuillez saisire votre Nom de famille !";
            error_family.style.color = " red";
            family.style.borderColor = "red";
            e.preventDefault();
          } else if (!myRegex.test(family.value)) {
            error_family.innerHTML = "Veuillez enterz une auter valeur !";
            error_family.style.color = "red";
            family.style.borderColor = "red";
            e.preventDefault();
          } else {
            error_family.innerHTML = "";
            error_family.style.color = "green";
            family.style.borderColor = "green";
          }


        //Form mail
        if (mail.value === "") {
            error_mail.innerHTML = "Veuillez saisire votre mail !";
            error_mail.style.color = " red";
            mail.style.borderColor = "red";
            e.preventDefault();
          } else if (!myRegexmail.test(mail.value)) {
            error_mail.innerHTML = "Veuillez enterz une auter valeur !";
            error_mail.style.color = "red";
            mail.style.borderColor = "red";
            e.preventDefault();
          } else {
            error_mail.innerHTML = "";
            error_mail.style.color = "green";
            mail.style.borderColor = "green";
          }

          //Form numeros
        if (numeros.value === "") {
            error_numeros.innerHTML = "Veuillez saisire votre Numéros de téléphone !";
            error_numeros.style.color = " red";
            numeros.style.borderColor = "red";
            e.preventDefault();
          } else if (!myRegexNumber.test(numeros.value)) {
            error_numeros.innerHTML = "Veuillez enterz une auter valeur !";
            error_numeros.style.color = "red";
            numeros.style.borderColor = "red";
            e.preventDefault();
          } else {
            error_numeros.innerHTML = "";
            error_numeros.style.color = "green";
            numeros.style.borderColor = "green";
          }

          //Form sujet
        if (sujet.value === "") {
            error_sujet.innerHTML = "Veuillez saisire votre Sujet !";
            error_sujet.style.color = " red";
            sujet.style.borderColor = "red";
            e.preventDefault();
          } else if (!myRegex.test(sujet.value)) {
            error_sujet.innerHTML = "Veuillez enterz une auter valeur !";
            error_sujet.style.color = "red";
            sujet.style.borderColor = "red";
            e.preventDefault();
          } else {
            error_sujet.innerHTML = "";
            error_sujet.style.color = "green";
            sujet.style.borderColor = "green";
          }

          //Form message
        if (message.value === "") {
            error_message.innerHTML = "Veuillez saisire votre Message !";
            error_message.style.color = "red";
            message.style.borderColor = "red";
            e.preventDefault();
          } else if (!myRegex.test(message.value)) {
            error_message.innerHTML = "Veuillez enterz une auter valeur !";
            error_message.style.color = "red";
            message.style.borderColor = "red";
            e.preventDefault();
          } else {
            error_message.innerHTML = "";
            error_message.style.color = "green";
            message.style.borderColor = "green";
          }

    }   

