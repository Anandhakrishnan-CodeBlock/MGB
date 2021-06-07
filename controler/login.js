$(document).ready(function () {

// contact form
  $("#login_form").submit(function(event){
    // cancels the form submission
    event.preventDefault();
    loginForm();
});

function loginForm(){
      
var username = $("#name").val();
var password = $("#password").val();
    
$.ajax({
type : "POST",
url : "php/login.php",
data :  {username:username,password:password},
cache : false,
success:function(response) 
{
  if(response==0)
  {
    $('#msg').html("<br> <big>User Invalid</big>"); 
  }
else
  {
     window.location.href="index.php";
  }
  }
});
return false;
}
    

});
