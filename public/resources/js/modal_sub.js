
let modalTriggerBtnTwo = document.querySelectorAll(".js_modal_trigger__btn--two");
let closeBtnTwo = document.querySelector(".modal_contact__close_two");
let subModal = document.querySelector(".sub_modal");
let innerModalTwo = document.querySelector(".contact_modal_inner--two");
subModal.style.height = "1500px";
subModal.style.overflow = "auto";


for (let i = 0; i < modalTriggerBtnTwo.length; i++) {
    modalTriggerBtnTwo[i].addEventListener("click", function (e) {
        e.preventDefault();
        document.body.style.height = "100vh";
        document.body.style.overflow = "hidden";
        toggleModalTwo();
    });
}




closeBtnTwo.addEventListener("click", function () {
    toggleModalTwo();
    document.body.style.height = "unset";
    document.body.style.overflow = "unset";
    document.body.removeAttribute("style");
});


window.addEventListener("click", function (e) {
    if(e.target === innerModalTwo){
        subModal.classList.remove("contact_modal--show");
        document.body.style.height = "unset";
        document.body.style.overflow = "unset";
    }
})


function toggleModalTwo() {
    subModal.classList.toggle("contact_modal--show");
}





let checkBox = document.querySelector(".unchecked");
let checkBox1 = document.querySelector(".unchecked1");
let checkBox2 = document.querySelector(".unchecked2");

let deSelectBtn = document.querySelector("#download__deselect");

let deSelectLabelText = document.querySelector(".download__deselect--text");

deselectBtnStatus= deSelectBtn.checked;

checkBoxStatus = !checkBox.checked;
checkBoxStatus1 = !checkBox1.checked;
checkBoxStatus2 = !checkBox2.checked;




deSelectBtn.addEventListener( "click" , function(){
   
           
    if (deselectBtnStatus != true){

        deSelectLabelText.textContent = "DeSelect All";
        
        deselectBtnStatus = deSelectBtn.checked;

        checkBox.checked = true;
        checkBox1.checked = true;
        checkBox2.checked = true;

   } else {
        deSelectLabelText.textContent = "Select All";
        
        deselectBtnStatus = deSelectBtn.checked;

        checkBox.checked = false;
        checkBox1.checked = false;
        checkBox2.checked = false;

    }

    
    
})
    








