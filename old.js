//jquery

//----------SCROLL  NAVBAR CHANGE COLOR----------
$(document).ready(function () {  //Fonction qui permet de chercher dans la bibliothéque
  $(this).scroll(function () {  //Fonction qui permet de
    var scroll = $(this).scrollTop(); //this fait référence à l'objet auquel appartienent les fonction
    if (scroll > 100) {  // Condition de scroll
      $(".navbar").css("background", "#c7ac62"); //Ci on scroll vers le bas la couleur est appliqué
    } else {
      $(".navbar").css("background", "");//Sinon elle n'est pas appliqué
    }
  });
});

//----------MENU  HAMBURGER----------
function toggleMenu (){ //
    $('.burger') .on('click',function(){ // //Fonction qui prend en compte le click
        $('.navbar').toggleClass('show-nav') //
    });
  }
  toggleMenu();

//----------FORMULAIRE----------
$(document).ready(function() {

  $('#contact_name').on('input', function() {
    var input=$(this);
    var is_name=input.val();
  });


  
  $('#contact_email').on('input', function() {
    var input=$(this);
    var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var is_email=re.test(input.val());
  });
  

  $('#contact_website').on('input', function() {
    var input=$(this);
    if (input.val().substring(0,4)=='www.'){input.val('http://www.'+input.val().substring(4));}
    var myRegex = /^[\w-]+(\.[\w-]+)+([\w.,@?^=%&amp;:\/~+#-]*[\w@?^=%&amp;\/~+#-])?/;
    var is_url=re.test(input.val());
  });

  $('#contact_message').keyup(function(event) {
    var input=$(this);
    var message=$(this).val();
    console.log(message);
  });

$("#contact_submit button").click(function(event){
  var form_data=$("#contact").serializeArray();
  var error_free=true;
  for (var input in form_data){
    var element=$("#contact_"+form_data[input]['name']);
    var valid=element.hasClass("valid");
    var error_element=$("span", element.parent());
  }
  if (!error_free){
    event.preventDefault(); 
  }
  else{
    alert('No errors: Form will be submitted');
  }
});


});


