
let modalTriggerBtn = document.querySelector(".js_modal_trigger__btn");
let modalTriggerBtnTwo = document.querySelector(".js_modal_trigger__btn--two");
let closeBtn = document.querySelector(".modal_contact__close");
let closeBtnTwo = document.querySelector(".modal_contact__close_two");
let contactModal = document.querySelector(".contact_modal");
let subModal = document.querySelector(".sub_modal");
let innerModal = document.querySelector(".contact_modal_inner");
let innerModalTwo = document.querySelector(".contact_modal_inner--two");
contactModal.style.height = "1500px";
contactModal.style.overflow = "auto";
subModal.style.height = "1500px";
subModal.style.overflow = "auto";

modalTriggerBtn.addEventListener("click", function (e) {
    e.preventDefault();
    document.body.style.height = "100vh";
    document.body.style.overflow = "hidden";
    toggleModal();

});

modalTriggerBtnTwo.addEventListener("click", function (e) {
    e.preventDefault();
    document.body.style.height = "100vh";
    document.body.style.overflow = "hidden";
    toggleModalTwo();

});


closeBtnTwo.addEventListener("click", function () {
    toggleModalTwo();
    document.body.style.height = "unset";
    document.body.style.overflow = "unset";
    document.body.removeAttribute("style");
});

closeBtn.addEventListener("click", function () {
    toggleModal();
    document.body.style.height = "unset";
    document.body.style.overflow = "unset";
    document.body.removeAttribute("style");
});

window.addEventListener("click", function (e) {
    if (e.target === innerModal){
        contactModal.classList.remove("contact_modal--show");
        document.body.style.height = "unset";
        document.body.style.overflow = "unset";
    } else if(e.target === innerModalTwo){
        subModal.classList.remove("contact_modal--show");
        document.body.style.height = "unset";
        document.body.style.overflow = "unset";
    }
})

function toggleModal() {
    contactModal.classList.toggle("contact_modal--show");
}

function toggleModalTwo() {
    subModal.classList.toggle("contact_modal--show");
}