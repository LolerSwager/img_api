const openlogin = document.querySelector('#openlogin');
const login = document.querySelector(".login");
const signupBtn = document.querySelector("#signup-btn");
const signupForm = document.querySelector(".signup-form")

openlogin.addEventListener("click", () => {
    login.style.display = "unset";
});

signupBtn.addEventListener("click", () => {
    login.style.display = "none";
    signupForm.style.display = "unset";
});