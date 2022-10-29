// btn animation
let btn = document.querySelectorAll(".mouse-cursor-gradient-tracking");
for (let i = 0; i < btn.length; i++) {
  btn[i].addEventListener("mousemove", (mouse) => {
    let rect = mouse.target.getBoundingClientRect();
    let x = mouse.clientX - rect.left;
    let y = mouse.clientY - rect.top;
    btn[i].style.setProperty("--x", x + "px");
    btn[i].style.setProperty("--y", y + "px");
  });
}

// btn toUP
let toUp = document.querySelector(".toUp");
window.addEventListener("scroll", function () {
  if (window.scrollY > 170) {
    toUp.style.display = "block";
  } else {
    toUp.style.display = "none";
  }
  sessionStorage.setItem("scrollY", window.scrollY);
});
toUp.addEventListener("click", function () {
  window.scrollTo(0, 0);
});
window.onload = function () {
  window.scrollTo(0, sessionStorage.getItem("scrollY"));
};

// validation for form
(function () {
  "use strict";
  var forms = document.querySelectorAll(".needs-validation");
  Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener(
      "submit",
      function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add("was-validated");
      },
      false
    );
  });
})();




function myFunction() {
    var x = document.getElementById("typePasswordX");
    var y = document.getElementById("color");
    if (x.type === "password") {
      x.type = "text";
        y.style.color = "#66f3a5";
    } else {
      x.type = "password";
      y.style.color = "#7f7f7f";
    }
  }


function myFunction1() {
  var x = document.getElementById("typePasswordX1");
  var y = document.getElementById("color1");
  if (x.type === "password") {
    x.type = "text";
    y.style.color = "#66f3a5";
  } else {
    x.type = "password";
    y.style.color = "#7f7f7f";
  }
}


// check confirm password
var password = document.getElementById("typePasswordX"),
  confirm_password = document.getElementById("typePasswordX1");
function validatePassword() {
  if (password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity("");
  }
}
password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

