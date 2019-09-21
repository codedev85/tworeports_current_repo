let dropDownText = document.querySelectorAll(".clicked__object");

let dropDownContent = document.querySelectorAll(".privacy__section--menu-description");

let arrowIcon = document.querySelectorAll(".arrow__toggleable-icon");




for (let i = 0; i <dropDownText.length; i++) {

    dropDownText[i].addEventListener("click", function(){
            arrowIcon[i].classList.toggle("arrow__toggleable-rotate");
            dropDownContent[i].classList.toggle("privacy__section--menu-showtext");
    });

}