let openlogin = document.querySelector('#openlogin');
let loginBox = document.querySelector(".loginBox");
let signupBtn = document.querySelector("#signup-btn");
let registerBox = document.querySelector(".registerBox");
let backToLogin = document.querySelector("#backToLogin");
let grey = document.querySelector(".grey-box");
let openupload = document.querySelector('#openupload');
let uploadBox = document.querySelector('.uploadBox');

openlogin.addEventListener("click", () => {
    loginBox.style.display = "unset";
    grey.style.display = "unset";
    registerBox.style.display = "none";
});

backToLogin.addEventListener("click", () => {
    loginBox.style.display = "unset";
    registerBox.style.display = "none";
});

signupBtn.addEventListener("click", () => {
    loginBox.style.display = "none";
    registerBox.style.display = "unset";
});

openupload.addEventListener("click", () => {
    uploadBox.style.display = "unset";
    grey.style.display = "unset";
});

function closeForm() {
    loginBox.style.display = "none";
    registerBox.style.display = "none";
    grey.style.display = "none";
    uploadBox.style.display = "none";
}