let cookieModal = document.querySelector(".cookie-consent-modal")
let cancelCookieBtn = document.querySelector(".btn.cancel")
let acceptCookieBtn = document.querySelector(".btn.accept")

cancelCookieBtn.addEventListener("click", function (){
    cookieModal.classList.remove("active")
})
acceptCookieBtn.addEventListener("click", function (){
    cookieModal.classList.remove("active")
    localStorage.setItem("check_popup", "yes")
})

setTimeout(function (){
    let cookieAccepted = localStorage.getItem("check_popup")
    if (cookieAccepted != "yes"){
        cookieModal.classList.add("active")
    }
}, 2000)