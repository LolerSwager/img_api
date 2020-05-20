const openlogin = document.querySelector('#openlogin');
const login = document.querySelector(".login");
const signupBtn = document.querySelector("#signup-btn");
const signupForm = document.querySelector(".signup-form")
const backToLogin = document.querySelector("#backToLogin")
const body = document.querySelectorAll("body");

openlogin.addEventListener("click", () => {
    login.style.display = "unset";
    signupForm.style.display = "none";
});

backToLogin.addEventListener("click", () => {
    login.style.display = "unset";
    signupForm.style.display = "none";
});

signupBtn.addEventListener("click", () => {
    login.style.display = "none";
    signupForm.style.display = "unset";
});

body.addEventListener("click", function() {
    console.log("gewegw")
    login.style.display = "none";
    signupForm.style.display = "none";
})