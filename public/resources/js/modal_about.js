// this.body.style.overflow = "hidden";


let modalOne = document.querySelector(".modal__profile");
let modalTwo = document.querySelector(".modal__profile--two");
let modalThree = document.querySelector(".modal__profile--three");
let closeBtn = document.querySelectorAll(".modal__close_btn");
let modalBtn = document.querySelectorAll(".home__btn--modal");


for (let i = 0; i < modalBtn.length; i++) {
    
    modalBtn[i].addEventListener("click", function(e){

        if(i === 0){
            toggleFirstModal(e);
        } else if(i === 1){
            toggleSecondModal(e);
        }else if(i === 2){
            toggleThirdModal(e);
        }

    })
    
}

for (let x = 0; x < modalBtn.length; x++) {
    closeBtn[x].addEventListener("click", function(){
        console.log(modalThree)
        closeModalWithBtn();
    });
}

function toggleFirstModal(e) {
    e.preventDefault();
    modalOne.classList.add("modal__profile--view");
    document.body.style.overflow = "hidden";
}

function toggleSecondModal(e) {
    e.preventDefault();
    modalTwo.classList.add("modal__profile--two--view");
    document.body.style.overflow = "hidden";
}

function toggleThirdModal(e) {
    e.preventDefault();
    modalThree.classList.add("modal__profile--three--view");
    document.body.style.overflow = "hidden";
}

window.addEventListener("click", function (e) {
    closeAboutModal(e);
});


function closeAboutModal(e){
    if((e.target === modalOne) || (e.target === modalTwo) || (e.target === modalThree)){
        modalOne.classList.remove("modal__profile--view");
        modalTwo.classList.remove("modal__profile--two--view");
        modalThree.classList.remove("modal__profile--three--view");
        document.body.style.overflow = "auto";
    }
};


function closeModalWithBtn (){
    modalOne.classList.remove("modal__profile--view");
    modalTwo.classList.remove("modal__profile--two--view");
modalThree.classList.remove("modal__profile--three--view")
document.body.style.overflow = "auto";
}