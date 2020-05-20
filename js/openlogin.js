let openlogin = document.querySelector('#openlogin');
let login = document.querySelector(".login");
let signupBtn = document.querySelector("#signup-btn");
let signupForm = document.querySelector(".signup-form");
let backToLogin = document.querySelector("#backToLogin");
let loginbox = document.querySelector(".loginbox");
let grey = document.querySelector(".grey-box");

openlogin.addEventListener("click", () => {
    login.style.display = "unset";
    grey.style.display = "unset";
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

function closeForm() {
    login.style.display = "none";
    signupForm.style.display = "none";
    grey.style.display = "none";
}

