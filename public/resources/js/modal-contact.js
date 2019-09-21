
let modalTriggerBtnThree = document.querySelectorAll(".btn-contact-trigger");
let closeBtnThree = document.querySelector(".modal_contact__close_three");
let contactModalThree = document.querySelector(".modal__contact");
let innerModalThree = document.querySelector(".contact_modal_inner--three");
// contactModalThree.style.height = "1500px";
contactModalThree.style.overflow = "auto";


for (let i = 0; i < modalTriggerBtnThree.length; i++) {
    modalTriggerBtnThree[i].addEventListener("click", function (e) {
        e.preventDefault();
        document.body.style.height = "100vh";
        document.body.style.overflow = "hidden";
        toggleModalThree();
    });
}




closeBtnThree.addEventListener("click", function () {
    toggleModalThree();
    document.body.style.height = "unset";
    document.body.style.overflow = "unset";
    document.body.removeAttribute("style");
});


window.addEventListener("click", function (e) {
    if(e.target === innerModalThree){
        console.log('worked')
        contactModalThree.classList.remove("modal__contact--view");
        document.body.style.height = "unset";
        document.body.style.overflow = "unset";
    }
})


function toggleModalThree() {
    contactModalThree.classList.toggle("modal__contact--view");
}