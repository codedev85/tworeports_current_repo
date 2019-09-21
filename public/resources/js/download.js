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

let modalTriggerer = document.querySelector(".js_modal_trigger__btn");
let closeBtnFour = document.querySelector(".modal_contact__close");
let downloadModal = document.querySelector(".contact_modal");
let downloadInnerModal = document.querySelector(".contact_modal_inner--four");
downloadModal.style.overflow = "auto";


modalTriggerer.addEventListener("click", function (e) {
    e.preventDefault();
    document.body.style.height = "100vh";
    document.body.style.overflow = "hidden";
    toggleDownloadModal();
});



closeBtnFour.addEventListener("click", function () {
    toggleDownloadModal();
    document.body.style.height = "unset";
    document.body.style.overflow = "unset";
    document.body.removeAttribute("style");
});


window.addEventListener("click", function (e) {
    if (e.target === downloadInnerModal) {
        downloadModal.classList.remove("modal__contact--view");
        document.body.style.height = "unset";
        document.body.style.overflow = "unset";
    }
})


function toggleDownloadModal() {
    downloadModal.classList.toggle("modal__contact--view");
}