const welcome_container = document.getElementById("welcome");
const warper=document.querySelector(".warper");
const loginlink=document.querySelector(".login-link");
const registerlink=document.querySelector(".register-link");
const button=document.querySelector(".btnlogin-popup");
const crossbuttton=document.querySelector(".ion");
button.addEventListener("click",()=>{
    warper.classList.add(`active-popup`);
    welcome_container.style.display = 'none';
});
crossbuttton.addEventListener("click",()=>{
    warper.classList.remove(`active-popup`);
    welcome_container.style.display = 'block';
    welcome_container.classList.add("bichho");
    welcome_container.style.animation = 'none';
});

registerlink.addEventListener("click",()=>{
    warper.classList.add(`active`);
});
loginlink.addEventListener("click",()=>{
    warper.classList.remove(`active`);

});

