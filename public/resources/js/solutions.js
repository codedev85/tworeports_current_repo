let animatedHeader = document.querySelector(".header__animated_logo");
let fixedTopNav = document.querySelector(".home__header_nav")

let screenPos;

function setPos(params) {
    if(screen.availWidth <= 500){
        screenPos = screen.height - 100;
    }else{
        screenPos = screen.height * 0.6;
    }
}

setPos();

window.addEventListener("resize", function(){
    setPos();
})


window.addEventListener("scroll", function () {

    console.log(window.scrollY);

    if (window.scrollY >= screenPos) {
        if (screen.availWidth > 640) {
            animatedHeader.classList.add("animate");
        }
        fixedTopNav.classList.remove("fixed");

    } else if (window.scrollY < screenPos) {
        animatedHeader.classList.remove("animate");
        fixedTopNav.classList.add("fixed")
    }

});

if (screen.availWidth > 640) {
    animatedHeader.classList.add("animate");
}

if (window.scrollY < screenPos) {
    animatedHeader.classList.remove("animate");
    fixedTopNav.classList.add("fixed")
}