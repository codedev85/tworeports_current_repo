let backgroundImages = document.querySelectorAll(".slide");
let images = document.querySelectorAll(".slidingImage");



for (let index = 0; index < backgroundImages.length; index++) {
    backgroundImages[index].style.background = `url(${images[index].src})`;
    backgroundImages[index].style.backgroundPosition = "top center";
    backgroundImages[index].style.backgroundRepeat = "none";
    backgroundImages[index].style.backgroundSize = "cover";
}

$(document).ready(function () {
    let owl = $(".owl-one")
    owl.owlCarousel({
        items: 6,
        dots: true,
        dotsEach: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 3,
                nav: false
            },
            1000: {
                items: 6,
                nav: true,
                loop: false
            }
        }
    });

    $('.home__next').click(function () {
        owl.trigger('next.owl.carousel');
    })


    $('.home__previous').click(function () {
        owl.trigger('prev.owl.carousel');
    })
});

$(document).ready(function () {
    let owl = $(".owl_three")
    owl.owlCarousel({
        items: 3,
        responsive: {
            0: {
                items: 1
            },
            500: {
                items: 1,
                nav: false
            },
            657: {
                items: 2,
                nav: false
            },
            1000: {
                items: 3
            }
        }
    });

    $('.home__sec_next').click(function () {
        owl.trigger('next.owl.carousel');
    })


    $('.home__sec_previous').click(function () {
        owl.trigger('prev.owl.carousel');
    })

});


let rightAside = document.querySelector(".home__side_right_container");
let mainLeftContainer = document.querySelector('.home__side_outer_container');
let homeSideContainer = document.querySelector(".home__side_container");


//swap to make responsive for tab and mobile 
mainLeftContainer.innerHTML += rightAside.outerHTML;

let individualCaseStudy = document.querySelectorAll(".home_case_individual_container");


for (let i = 0; i < individualCaseStudy.length; i++) {
    individualCaseStudy[i].addEventListener("click", function () {
        window.location.href = individualCaseStudy[i].childNodes[1].href;
    });
}



let slideInnerContainer = $(".hero__images__slide_index__container");

let sliderz = $(".index__slider");

function nextSlider() {
    slideInnerContainer.animate({ left: '-100%' }, 900, function () {
        slideInnerContainer.css('left', '0%');
        $('.index__slider').last().after($('.index__slider').first());
        $('.dots').first().before($('.dots').last());
    });
}

function previousSlider() {
    slideInnerContainer.animate({ left: '0%' }, 300, function () {
        // slideInnerContainer.css('left', '-100%');
        $('.index__slider').first().before($('.index__slider').last());
    });
}

setInterval(nextSlider, 8000);


let dots = document.querySelectorAll(".dots");


for (let i = 0; i < dots.length; i++) {
    dots[i].addEventListener("click", function () {

        for (let x = 0; x < dots.length; x++) {
            dots[x].classList.remove("dots--active");
            if (i == 0) {
                slideInnerContainer.animate({ left: "0%" })
            } else
                if (i == 1) {
                    slideInnerContainer.animate({ left: "-100%" })
                } else
                    if (i == 2) {
                        slideInnerContainer.animate({ left: "-200%" })
                    } else
                        if (i == 3) {
                            slideInnerContainer.animate({ left: "-300%" })
                        }
        }

        dots[i].classList.add("dots--active");



    })
}

let animatedHeader = document.querySelector(".header__animated_logo");
let fixedTopNav = document.querySelector(".home__header_nav");
let screenPos = screen.height - 100;
window.addEventListener("resize", function(){
    screenPos = screen.height - 100;
})


window.addEventListener("scroll", function () {

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