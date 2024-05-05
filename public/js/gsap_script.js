gsap.registerPlugin(ScrollTrigger);




// HEADER
gsap.to("#scroll_top", {
    xPercent: -10,
    ease: "none",
    scrollTrigger: {
        trigger: "#scroll_wrapper",
        start: "top 35%",
        end: "top 10%",
        scrub: 0.5,
        // markers: true,
        toggleActions: "restart pause reverse pause",
    }
});
gsap.to("#scroll_bottom", {
    xPercent: 10,
    ease: "none",
    scrollTrigger: {
        trigger: "#scroll_wrapper",
        start: "top 35%",
        end: "top 10%",
        scrub: 0.5,
        // markers: true,
        toggleActions: "restart pause reverse pause",
    }
});
gsap.to("#header_image", {
    scrollTrigger: {
        trigger: "#header_image",
        // markers: true,
        start: "center 49%",
        end: "75% top",
        scrub: 0.5,

    },
    rotation: 45,
    scale: 3,
});




// IMAGE-BANNER
const images = gsap.utils.toArray('.wrapper li img');
const scrollTrig = () => {
    gsap.utils.toArray('.image-banner').forEach((section, index) => {
        const w = section.querySelector('.wrapper');
        const [x, xEnd] = (index % 2) ? ['100%', (w.scrollWidth - section.offsetWidth) * -1] : [w.scrollWidth * -1, 0];
        gsap.fromTo(w, { x }, {
            x: xEnd,
            scrollTrigger: {
                trigger: section,
                scrub: 0.5
            }
        });
    });
}
imagesLoaded(images).on('always', scrollTrig);




// ANGLE IMAGE
gsap.to("#left_image", {
    scrollTrigger: {
        trigger: "#left_image",
        start: "top 60%",
        end: "top 20%",
        scrub: 4,
        // markers: true,
        toggleActions: "restart pause reverse pause",

    },
    x: 0,
    rotation: -10,

});
gsap.to("#right_image", {
    scrollTrigger: {
        trigger: "#right_image",
        start: "top 65%",
        end: "top 20%",
        scrub: 3,
        toggleActions: "restart pause reverse pause",

    },
    x: 0,
    rotation: 10,

});
gsap.to("#angle_image", {
    scrollTrigger: {
        trigger: "#angle_image",
        // markers: true,
        start: "top 80%",
        end: "top 40%",
        scrub: 2,
        toggleActions: "restart pause reverse pause",
    },
    backgroundColor: "#140a0b",
    color: "white"
});


// IMAGE 4x4
gsap.to("#sideimage_img", {
    scrollTrigger: {
        trigger: "#sideimage_img",
        // markers: true,
        start: "top 50%",
        end: "top 10%",
        scrub: 4,
        toggleActions: "restart pause reverse pause",
    },
    y: 0,
    scale: 1.5,
    rotation: 0,
});
gsap.to("#sideimage_imgL", {
    scrollTrigger: {
        trigger: "#sideimage_imgL",
        // markers: true,
        start: "top 50%",
        end: "top 10%",
        scrub: 4,
        toggleActions: "restart pause reverse pause",
    },
    x: 0,
    scale: 1.5,
    rotation: 0,
});

// MODERN CARD
gsap.to("#left_modern", {
    scrollTrigger: {
        trigger: "#modern_card_bg",
        start: "top 60%",
        end: "top 10%",
        scrub: 0.5,
        // markers: true,
        toggleActions: "restart pause reverse pause",

    },
    x: 0,
    rotation: 0,
});
gsap.to("#right_modern", {
    scrollTrigger: {
        trigger: "#modern_card_bg",
        start: "top 60%",
        end: "top 10%",
        scrub: 0.5,
        // markers: true,
        toggleActions: "restart pause reverse pause",

    },
    x: 0,
    rotation: 0,
});
gsap.to("#modern_card_bg", {
    scrollTrigger: {
        trigger: "#modern_card_bg",
        // markers: true,
        start: "top 80%",
        end: "top 40%",
        scrub: 2,
        toggleActions: "restart pause reverse pause",
    },
    backgroundColor: "#140a0b",
    color: "white"
});



// QUOTE
gsap.to("#quote_image", {
    scrollTrigger: {
        trigger: "#quote_container",
        // markers: true,
        start: "top 80%",
        end: "top 10%",
        scrub: 3,

    },
    rotation: 30,
    scale: 2,
});
// PRICING
gsap.to("#pricing_container", {
    scrollTrigger: {
        trigger: "#pricing_container",
        // markers: true,
        start: "top 80%",
        end: "top 40%",
        scrub: 2,
        toggleActions: "restart pause reverse pause",
    },
    backgroundColor: "#140a0b",
});
