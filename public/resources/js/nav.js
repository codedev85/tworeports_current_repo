
let menuIcon = $(".menu__icon");
let menuModal = $(".nav_menu__resp");


$(".menu__close").click(function(){
    menuModal.animate({left: "-100%"});
    document.body.style.height = "unset";
    document.body.style.overflow = "unset";

});

$(window).click(function(e) {
    if(e.target.className === "nav_menu__resp"){
        menuModal.animate({left: "-100%"});
        document.body.style.height = "unset";
    document.body.style.overflow = "unset";
    }
});

menuIcon.click(function(){
    menuModal.animate({left: "0%"});
    document.body.style.height = "100vh";
    document.body.style.overflow = "hidden";
});

function colorRed() {

    for(let i = 0; i < document.querySelectorAll(".resp_menu__link--active:link path").length; i++){
        document.querySelectorAll(".resp_menu__link--active:link path")[i].setAttribute("fill", "#e00909");
        if (document.querySelectorAll(".resp_menu__link--active:link polygon").length > 0){
            document.querySelectorAll(".resp_menu__link--active:link polygon")[i].setAttribute("fill", "#e00909");
        }
        
    }
    
}

colorRed();



let dropDownLinksContainer = document.querySelectorAll(".drp_container__mobile");
let dropDownLinktriggerBtn = document.querySelectorAll(".resp_menu_drp__js");

// for (let i = 0; i < dropDownLinktriggerBtn.length; i++) {
//     dropDownLinktriggerBtn[i].addEventListener("click", function(e){
//         e.preventDefault();
//         dropDownLinksContainer[i].classList.toggle("open_menu");
//     })
// }