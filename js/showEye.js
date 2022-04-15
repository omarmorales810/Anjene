const eyeClose = document.querySelector(".eye-close-svg-wrapper");
const eyeOpen = document.querySelector(".eye-open-svg-wrapper");
const passwordInput = document.querySelector(".password-field input");

passwordInput.oninput = () => {
  if (passwordInput.type == "password" && passwordInput.value.length > 0) {
    eyeClose.style.display = "flex";
  }
  else {
    eyeClose.style.display = "none";
  }

  if (passwordInput.type == "text" && passwordInput.value.length < 1) {
    eyeOpen.style.display = "none";
  }
  
  if (passwordInput.type == "text" && passwordInput.value.length > 0) {
    eyeOpen.style.display = "flex";
  }
}

eyeClose.onclick = () => {
  if (passwordInput.type == "password") {
    eyeOpen.style.display = "flex";
    eyeClose.style.display = "none";
    passwordInput.type = "text";
  }
}

eyeOpen.onclick = () => {
  if (passwordInput.type == "text") {
    eyeOpen.style.display = "none";
    eyeClose.style.display = "flex";
    passwordInput.type = "password";
  }
}

