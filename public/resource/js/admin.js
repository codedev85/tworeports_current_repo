let dropDownText = document.querySelector(".left__clicked--text");
let dropDownContainer = document.querySelector(".left__menu--sub-item"); 
let dropDownArrow = document.querySelector(".dropdown__arrow");
let inputTR = document.querySelectorAll("input");
let textArea = document.querySelectorAll("textarea");



dropDownText.addEventListener("click", function(){


    dropDownContainer.classList.toggle("left__menu--js");   
    dropDownArrow.classList.toggle("arrow__transform");

});

// $.each($("input"), function(){

    
//     $(this).keypress(function(){

//         alert("hello");
//     })

// })


for (let x = 0; x < inputTR.length; x++) {
    
    inputTR[x].classList.add("input__bg--icon");
    
}
for (let x = 0; x < textArea.length; x++) {
    
    textArea[x].classList.add("textarea-js");
    
}


for (let n = 0; n < inputTR.length; n++) {

    inputTR[n].addEventListener("input", function (params) {
        
        if(inputTR[n].value.length >= 1){
            inputTR[n].classList.remove("input__bg--icon");
        }else if (inputTR[n].value.length < 1){
            inputTR[n].classList.add("input__bg--icon");
        }

    })
}
for (let n = 0; n < textArea.length; n++) {

    textArea[n].addEventListener("input", function (params) {
        
        if(textArea[n].value.length >= 1){
            textArea[n].classList.remove("textarea-js");
        }else if (textArea[n].value.length < 1){
            textArea[n].classList.add("textarea-js");
        }

    })
}
