let dropDownText = document.querySelectorAll(".clicked__object");

let dropDownContent = document.querySelectorAll(".privacy__section--menu-description");

let arrowIcon = document.querySelectorAll(".arrow__toggleable-icon");




for (let i = 0; i <dropDownText.length; i++) {



    dropDownText[i].addEventListener("click", function(){

        for (let x = 0; x < dropDownContent.length; x++) {



            for (let o = 0; o < dropDownContent.length; o++) {

                if(o!=i){

                    arrowIcon[o].classList.remove("arrow__toggleable-rotate");


                    dropDownContent[o].classList.remove("privacy__section--menu-showtext");


                }
                arrowIcon[x].classList.toggle("arrow__toggleable-rotate");
                
            }
            
            dropDownContent[i].classList.toggle("privacy__section--menu-showtext");
            
            
        }
        

    })


}


 