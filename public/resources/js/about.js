let animatedHeader = document.querySelector(".header__animated_logo");
let fixedTopNav = document.querySelector(".home__header_nav")

let screenPos;

function setPos(params) {
    if(screen.availWidth <= 640){
        screenPos = screen.height - 100
    }else{
        screenPos = screen.height * 0.6 - 100
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


$(".js__wp--1").waypoint(function(direction){
    $(".js__wp--1").addClass("animated fadeIn");
}, {
    offset: "50%"
});
$(".js__wp--2").waypoint(function(direction){
    $(".js__wp--2").addClass("animated fadeIn");
}, {
    offset: "50%"
});
$(".js__wp--3").waypoint(function(direction){
    $(".js__wp--3").addClass("animated fadeIn");
}, {
    offset: "50%"
});
$(".js__wp--4").waypoint(function(direction){
    $(".js__wp--4").addClass("animated fadeIn");
}, {
    offset: "50%"
});
$(".js__wp--5").waypoint(function(direction){
    $(".js__wp--5").addClass("animated fadeIn");
}, {
    offset: "50%"
});
$(".js__wp--6").waypoint(function(direction){
    $(".js__wp--6").addClass("animated fadeIn");
}, {
    offset: "50%"
});
$(".js__wp--7").waypoint(function(direction){
    $(".js__wp--7").addClass("animated fadeIn");
}, {
    offset: "50%"
});
$(".js__wp--8").waypoint(function(direction){
    $(".js__wp--8").addClass("animated fadeIn");
}, {
    offset: "50%"
});
$(".js__wp--9").waypoint(function(direction){
    $(".js__wp--9").addClass("animated fadeIn");
}, {
    offset: "50%"
});
$(".js__wp--10").waypoint(function(direction){
    $(".js__wp--10").addClass("animated fadeIn");
}, {
    offset: "50%"
});
$(".js__wp--11").waypoint(function(direction){
    $(".js__wp--11").addClass("animated fadeInUp");
}, {
    offset: "50%"
});
$(".js__wp--12").waypoint(function(direction){
    $(".js__wp--12").addClass("animated fadeInUp");
}, {
    offset: "50%"
});
$(".js__wp--13").waypoint(function(direction){
    $(".js__wp--13").addClass("animated fadeInUp");
}, {
    offset: "50%"
});
$(".js__wp--14").waypoint(function(direction){
    $(".js__wp--14").addClass("animated fadeInUp");
}, {
    offset: "50%"
});
$(".js__wp--15").waypoint(function(direction){
    $(".js__wp--15").addClass("animated fadeInUp");
}, {
    offset: "50%"
});