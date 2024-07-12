//Tampilkan password
function togglePassword() {
  console.log("togglePassword function called");
  var x = document.getElementById("pwd");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
document.addEventListener("DOMContentLoaded", function () { 
  document.getElementById("togglePassword").addEventListener("change", togglePassword);
});

//Tampilkan PopUp ketika salah login
function login() {
  const x = new URLSearchParams(window.location.search);
  if (x.get("errcaptcha") === "true") {
    alert('Captcha kosong atau tidak sesuai!');
    document.getElementById("captcha").classList.add("error");
    window.location = "login.html";
  }
  if (x.get('errlogin') === 'true') {
    document.getElementById("usn").classList.add("error");
    alert('Username atau Password salah!');
    document.getElementById("pwd").classList.add("error");
    window.location = 'login.html';
  }
}

// Sidebar Function
const toggleBtn = document.querySelector(".toggle-btn");
const aside = document.querySelector("aside");
const main = document.querySelector("main");

toggleBtn.addEventListener("click", () => {
  aside.classList.toggle("closed");
  aside.classList.toggle("open");
  main.classList.toggle("expanded");
});




//Tanyakan konfirmasi sebelum logout dari dashboard
function ensure() {
  var x = confirm("Are you sure you want to logout?");
  if (x == true) {
    window.location.href = "../index.html";
  } else {
    window.location.href = "../dashboard/dashboard.html";
  }
}