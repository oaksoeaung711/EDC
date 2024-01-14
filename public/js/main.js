let navBtn = document.getElementById('nav-btn');
let mobileNav = document.getElementById('mobile-nav');

navBtn.addEventListener('click',(e)=>{
    navBtn.firstChild.classList.toggle('fi-rr-menu-burger');
    navBtn.firstChild.classList.toggle('fi-rr-cross');
    mobileNav.classList.toggle('left-0');
});

// Scroll Reveal Animation

const sr = ScrollReveal({
    origin: 'bottom',
    distance: '60px',
    duration: 3000,
    delay: 600,
    // reset: true, // resets animation
})

sr.reveal('.hero__section',{
    delay: 0,
    distance: '200px',
    interval: 100,
    origin: 'left',
})

sr.reveal('.hero__image1',{
    delay: 0,
    distance: '200px',
    interval: 100,
    origin: 'top',
})

sr.reveal('.hero__image2',{
    delay: 100,
    distance: '200px',
    interval: 100,
    origin: 'bottom',
})

sr.reveal('.hero__image3',{
    delay: 200,
    distance: '200px',
    interval: 100,
    origin: 'top',
})

sr.reveal('.welcome__section__header',{
    delay: 100,
    distance: '100px',
    interval: 50,
    origin: 'top',
})

sr.reveal('.welcome__section__card1',{
    delay: 150,
    distance: '50px',
    interval: 100,
    origin: 'top',
})

sr.reveal('.welcome__section__card2',{
    delay: 160,
    distance: '60px',
    interval: 100,
    origin: 'top',
})

sr.reveal('.welcome__section__card3',{
    delay: 170,
    distance: '70px',
    interval: 100,
    origin: 'top',
})

sr.reveal('.welcome__section__card4',{
    delay: 180,
    distance: '80px',
    interval: 100,
    origin: 'top',
})

sr.reveal('.welcome__section__image1',{
    delay: 200,
    distance: '80px',
    interval: 100,
    origin: 'left',
})

sr.reveal('.welcome__section__image2',{
    delay: 200,
    distance: '80px',
    interval: 100,
    origin: 'top',
})

sr.reveal('.welcome__section__image3',{
    delay: 200,
    distance: '80px',
    interval: 100,
    origin: 'bottom',
})

sr.reveal('.welcome__section__image4',{
    delay: 200,
    distance: '80px',
    interval: 100,
    origin: 'left',
})

sr.reveal('.welcome__section__image5',{
    delay: 200,
    distance: '80px',
    interval: 100,
    origin: 'top',
})

sr.reveal('.welcome__section__image6',{
    delay: 200,
    distance: '80px',
    interval: 100,
    origin: 'right',
})

sr.reveal('.welcome__section__image7',{
    delay: 200,
    distance: '80px',
    interval: 100,
    origin: 'bottom',
})

sr.reveal('.welcome__section__image8',{
    delay: 200,
    distance: '80px',
    interval: 100,
    origin: 'right',
})

sr.reveal('.program__header',{
    delay: 200,
    distance: '100px',
    interval: 100,
    origin: 'top',
})

sr.reveal('.program__info1',{
    delay: 150,
    distance: '150px',
    interval: 100,
    origin: 'top',
})

sr.reveal('.program__info2',{
    delay: 250,
    distance: '160px',
    interval: 100,
    origin: 'top',
})

sr.reveal('.program__info3',{
    delay: 350,
    distance: '200px',
    interval: 100,
    origin: 'top',
})

sr.reveal('.btn__slide',{
    delay: 350,
    distance: '300px',
    interval: 100,
    origin: 'left',
})

sr.reveal('.about__image',{
    delay: 100,
    distance: '100px',
    interval: 100,
    origin: 'left',
})

sr.reveal('.about__text',{
    delay: 100,
    distance: '100px',
    interval: 100,
    origin: 'right',
})

sr.reveal('.about__choose',{
    delay: 100,
    distance: '200px',
    interval: 100,
    origin: 'top',
})

sr.reveal('.contactus__header',{
    delay: 100,
    distance: '200px',
    interval: 100,
    origin: 'top',
})

sr.reveal('.contactus__info',{
    delay: 300,
    distance: '200px',
    interval: 100,
    origin: 'left',
})

sr.reveal('.contactus__map',{
    delay: 300,
    distance: '200px',
    interval: 100,
    origin: 'right',
})

sr.reveal('.office__image',{
    delay: 100,
    distance: '200px',
    interval: 100,
    origin: 'top',
})

sr.reveal('.gallery__slide',{
    delay: 100,
    distance: '100px',
    interval: 200,
    origin: 'top',
})