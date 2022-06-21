// Animation d'entrée
const burgerMenu = document.getElementById('burger-menu');
const nav = document.getElementById('menu');
const titleSpan = document.querySelectorAll('p.intro span');
const introW = document.querySelector('.introWeb');
const introS = document.querySelector('.introStage');
const btns = document.querySelectorAll('.btn-first');

const logo = document.querySelector('.logo');
const media = document.querySelectorAll('.bulle');
// const mediaS = document.querySelectorAll('.bulle-sm');
const l1 = document.querySelector('.l1');
const l2 = document.querySelector('.l2');

// Animation hobbies
const clickHobbies = document.getElementById('clickHobbies'); 
const showHobbies = document.getElementById('showHobbies');
const closeHobbies = document.getElementById('close_btn_showHobbies');
const elsArr = [].slice.call(document.querySelectorAll('.el'));
const closeBtnsArr = [].slice.call(document.querySelectorAll('.elem_close-btn'));

// Contact button
const formContact = document.getElementById('form-contact');
const buttonContact = document.getElementById('buttonContact')
const closeForm = document.getElementById('form_close-btn');
console.log(closeForm)
const cont = document.querySelector('.content');
const learnContact = document.getElementById('learncontact');

// Timeline
const allRonds = document.querySelectorAll('.rond');
const allBoxes = document.querySelectorAll('.boxT');
console.log(allBoxes)
// Carousel
const container = document.querySelector(".stage");
const containerCarousel = document.querySelector(".container-portfolio");
const ringCarousel = document.querySelector('.carousel-ring');
console.log(ringCarousel)
const carouselItem = document.querySelectorAll('.img-carousel')

// Mentions légales et politiques de confidentialité
const mentions = document.getElementById('mntleg');
const mentionsShow = document.getElementById('mentions-légales');
console.log(mentionsShow)
const closeMention = document.getElementById('mention_close-btn');
console.log(closeMention)

// Politque de confidentialité
const politique = document.getElementById('politiqueConf');
const politiqueShow = document.getElementById('politique');
const closePolitique = document.getElementById('poli_close-btn')


const clickHide = document.querySelectorAll('.clickHide');
console.log(clickHide)

// Burger Menu
burgerMenu.addEventListener('click', function(e){
    e.preventDefault();
    nav.classList.toggle('show');
    burgerMenu.classList.toggle('open');
});

// Contact button
buttonContact.addEventListener('click', function(e){
    e.preventDefault(); 
    formContact.classList.toggle('show');
})
closeForm.addEventListener('click', function(e){
    e.preventDefault();
    formContact.classList.toggle('show');
})
learnContact.addEventListener('click', function(e){
    e.preventDefault();
    formContact.classList.toggle('show');
})

// Hobbies
clickHobbies.addEventListener('click', function(e){
    e.preventDefault();
    showHobbies.classList.toggle('show');
})
closeHobbies.addEventListener('click', function(e){
    e.preventDefault(); 
    showHobbies.classList.toggle('show');
})

// Mentions légales
mentions.addEventListener('click', function(e){
    e.preventDefault();
    mentionsShow.classList.toggle('show');
    
})
closeMention.addEventListener('click', function(e){
    e.preventDefault();
    mentionsShow.classList.toggle('show');
})

// Politique de confidentialité
politique.addEventListener('click', function(e){
    e.preventDefault(); 
    politiqueShow.classList.toggle('show')
})
closePolitique.addEventListener('click', function(e){
    e.preventDefault(); 
    politiqueShow.classList.toggle('show');
})


// Animation d'entrée
window.addEventListener('load', () => {
    let tween = gsap.timeline({ paused: true });

    // Animer plusieurs éléments a la suite des autres.
    // stagger =  0.3 entre les evenements. 
    tween.from(titleSpan, {
        duration: 0.5,
        top: -50,
        opacity: 0,
        ease: "power2.out",
        stagger: 0.3
    })
    tween.from(introW, {
        duration: 0.5,
        delay: 0.5,
        top: -40,
        opacity: 0,
        ease: "power2.out",
        stagger: 0.3
    })
    tween.from(introS, {
        duration: 0.5,
        delay: 0.8,
        top: -40,
        opacity: 0,
        ease: "power2.out",
        stagger: 0.3
    })
    tween.from(btns, {
        duration: 1,
        delay: 1,
        opacity: 0,
        ease: "power2.out",
        stagger: 0.3
    })

    tween.from(nav, {
        duration: 0.8,
        delay : 0.5, 
        opacity: 0,
        // y: -60, 
        ease: "power1.inOut"
    })

    tween.from(l1, {
        duration: 0.8,
        delay: 0.5, 
        width: 0,
        ease: "power2.out"
    }, "-=2")

    tween.from(l2, {
        duration: 0.8,
        delay: 0.5,
        width: 0,
        ease: "power2.out"
    }, "-=2")

    tween.from(media, {
        duration: 0.9,
        right: -200,
        ease: "power2.out",
        stagger: 0.3
    }, "-=1")

    
    tween.play();
})

// Cards Photo return 
let cards = document.querySelector('.cards');
cards.addEventListener('click', function () {
    cards.classList.toggle('flipped');
})

// Hobbies
setTimeout(function() {
    cont.classList.remove('s--inactive');
  }, 200);
  
  elsArr.forEach(function(el) {
    el.addEventListener('click', function() {
      if (this.classList.contains('s--active')) return;
      cont.classList.add('s--el-active');
      this.classList.add('s--active');
    });
  });
  
  closeBtnsArr.forEach(function(btn) {
    btn.addEventListener('click', function(e) {
      e.stopPropagation();
      cont.classList.remove('s--el-active');
      document.querySelector('.el.s--active').classList.remove('s--active');
    });
  });

// ScrollMagic (boxSection) => a factoriser
let controller = new ScrollMagic.Controller();

let scene = new ScrollMagic.Scene({
    triggerElement: '.box1',
    reverse: false

})
.setClassToggle('.box1', 'fade-in')
.addTo(controller)

let scene2 = new ScrollMagic.Scene({
    triggerElement: '.box2',
    reverse: false
})
.setClassToggle('.box2', 'fade-in')
.addTo(controller)

let scene3 = new ScrollMagic.Scene({
    triggerElement: '.box3',
    reverse: false
})
.setClassToggle('.box3', 'fade-in')
.addTo(controller)

let scene4 = new ScrollMagic.Scene({
    triggerElement: '.box4',
    reverse: false
})
.setClassToggle('.box4', 'fade-in')
.addTo(controller)

let scene5 = new ScrollMagic.Scene({
    triggerElement: '.box5',
    reverse: false
})
.setClassToggle('.box5', 'fade-in')
.addTo(controller)

// Timeline - ScrollMagic (boxT) / Parcours

const timelineControl = new ScrollMagic.Controller()

allBoxes.forEach(box => {
    for(i = 0; i < allRonds.length; i++){
        if(allRonds[i].getAttribute('data-anim') === box.getAttribute('data-anim')){
            let tween = gsap.timeline();
            tween.from(box, {
                duration: 0.5,
                top: -50, 
                opacity: 0 
            })
            // let tween = gsap.from(box, {y: -50, opacity: 0, duration: 0.5})

            let timelineScene = new ScrollMagic.Scene({
                triggerElement : allRonds[i],
                reverse : false 
            })
            .setTween(tween)
            .addTo(timelineControl)
        }
    }
})

// Function creer un carousel
let isMouseDown = false;
let currentMousePos = 0;
let lastMousePos = 0;
let lastMoveTo = 0;
let moveTo = 0
const createCarousel = () => {
    const carouselAcces = onResize();
    const length = carouselItem.length;
    const deg = 360 / length;
    const gap = 25; 
    const tz = distanceZ(carouselAcces.w, length, gap)


    const fov = calculateFov(carouselAcces);
    const height = calculateHeight(tz);

    container.style.width = tz * 1 + gap * length + "px";
    container.style.height = height + "px";

    carouselItem.forEach((item, i) => {
        const degressByItem = deg * i + "deg";
        item.style.setProperty("--rotatey", degressByItem);
        item.style.setProperty("--tz", tz + "px");
    })
}

const lerp = (a, b, n) => {
    return n * (a -b) + b;
}

const distanceZ = (widthElement, length, gap) => {
    return (widthElement / 2) / Math.tan(Math.PI / length) + gap;
}

const calculateHeight = z => {
    const t = Math.atan(90 * Math.PI / 200 / 2);
    const height = t * 2 * z;

    return height;
}

const calculateFov = carouselAcces => {
    const perspective = window.getComputedStyle(containerCarousel).perspective.split("px")[0];

    const length = 
    Math.sqrt(carouselAcces.w * carouselAcces.w) + Math.sqrt(carouselAcces.h * carouselAcces.h);

    const fov = 2 * Math.atan(length / (2 * perspective)) * (180 / Math.PI);
    return fov;
}

const getPosX = x => {
    currentMousePos = x; 

    moveTo = currentMousePos < lastMousePos ? moveTo - 3 : moveTo + 2;

    lastMousePos = currentMousePos;
}

const update = () => {
    lastMoveTo = lerp(moveTo, lastMoveTo, 0.05);
    ringCarousel.style.setProperty("--rotatey", lastMoveTo + "deg");

    requestAnimationFrame(update);
}

const onResize = () => {
    const boudingCarousel = containerCarousel.getBoundingClientRect();

    const carouselAcces = {
        w: boudingCarousel.width,
        h: boudingCarousel.height
    }
    return carouselAcces;
}

const initEvent = () => {

    ringCarousel.addEventListener("mousedown", () => {
        isMouseDown = true;
        ringCarousel.style.cursor = "grabbing";
    })

    ringCarousel.addEventListener("mouseup", () => {
        isMouseDown = false;
        ringCarousel.style.cursor = "grab";
    })

    container.addEventListener("mouseleave", () => (isMouseDown = false));

    ringCarousel.addEventListener("mousemove", e => isMouseDown && getPosX(e.clientX)
    );

    ringCarousel.addEventListener("touchstart", () => {
        isMouseDown = true;
        ringCarousel.style.cursor = "grabbing";
    })

    ringCarousel.addEventListener("touchend", () => {
        isMouseDown = false;
        ringCarousel.style.cursor = "grab";
    })

    container.addEventListener("touchmove", e => isMouseDown && getPosX(e.touches[0].clientX)
    );

    window.addEventListener("resize", createCarousel); 

    update();
    createCarousel();
}

initEvent();
