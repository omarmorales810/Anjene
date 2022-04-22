var text = document.querySelector(".gaptch-text");
var signUpFormGaptcha = document.querySelector(".signup");

signUpFormGaptcha.addEventListener("submit",function(event) {
  var response = grecaptcha.getResponse();
  if(response.length == 0) { 
    text.style.display = "block";

    event.preventDefault();
    return false;
  }
});