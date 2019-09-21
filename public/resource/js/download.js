// let backgroundImages = document.querySelector(".slide__download");
// let image = document.querySelector(".slidingImage");

//     // console.log()
//     backgroundImages.style.background = `url(${image.src})`;
//     backgroundImages.style.backgroundPosition = "center";
//     backgroundImages.style.backgroundRepeat = "none";
//     backgroundImages.style.backgroundSize = "cover";



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
                nav: true
            },
            717: {
                items: 2,
                nav: false
            },
            1060: {
                items: 2
            },
            1061: {
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