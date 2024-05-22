//Logo
gsap.from('#first_title', {
    x: 400,
    duration: 1.25,
});

gsap.from('#second_title', {
    x: -400,
    duration: 1.25,
});

//Moto
gsap.from('#moto_img', {
    scrollTrigger: "#moto_title",
    x: 400,
    duration: 1.25,
});

gsap.from('#text_moto', {
    scrollTrigger: "#moto_title",
    y: 400,
    duration: 1.25,
});
