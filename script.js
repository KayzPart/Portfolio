// animation timeline

const allRonds = document.querySelectorAll('.rond');
console.log(allRonds)
const allBoxes = document.querySelectorAll('.box');
console.log(allBoxes)
const container = document.querySelector(".stage");
const containerCarousel = document.querySelector(".container-portfolio");
const ringCarousel = document.querySelector('.carousel-ring');
console.log(ringCarousel)
const carouselItem = document.querySelectorAll('.img-carousel')



//creation container ou toute nos animations s'appelle des scenes
const controller = new ScrollMagic.Controller()


allBoxes.forEach(box => {
// pour chaque box on va chercher le rond correspondant

    for(i = 0; i < allRonds.length; i++){
        // les i c'est tout les ronds
       // pour chaque box qui passe dans cette fonction à chaque fois on fait une boucle for qui va aller itérer à travers tout les ronds
        if(allRonds[i].getAttribute('data-anim') === box.getAttribute('data-anim')){
        //gsap (sa prend la box)
        //si la box a le meme attribut que le rond alors =>
        //tween = animation 
            let tween = gsap.from(box, {y: -50, opacity: 0, duration: 0.5})

            let scene = new ScrollMagic.Scene({
                // triggerelement = élément déclencheur (le rond qui correspond à la box)
               // allRonds de i qui correspond à la box
               //quand on va scroller jusqu'au rond ca va déclencher l'animation tween
                triggerElement: allRonds[i],
                reverse: false
            })
            .setTween(tween)
            // .addIndicators()
            .addTo(controller)
        }
    }
})
// Progress bar
const html = document.getElementById("html");
const css = document.getElementById("css");
const boots = document.getElementById("boots");
const wordp = document.getElementById("wordp");
const php = document.getElementById("php");
const sql = document.getElementById("sql");
const phtsp = document.getElementById("phtsp");
const js = document.getElementById("js");
const sass = document.getElementById("sass");
const illstr = document.getElementById("illstr");


let full_1 = 0;
let full_2 = 0;
let full_3 = 0;
let full_4 = 0;
let full_5 = 0;
setInterval(()=> {
if(full_1 == 90){}
  else{
  full_1 +=1;
  html.textContent = full_1 + "%";
  css.textContent = full_1 + "%";
  }
if(full_2 == 30){}
  else{
    full_2 += 1;
    boots.textContent = full_2 + "%";
    wordp.textContent = full_2 + "%";
  }
if(full_3 == 20){}
  else{
    full_3 += 1; 
    php.textContent = full_3 + "%";
    sql.textContent = full_3 + "%";
    phtsp.textContent = full_3 + "%";
  }
if(full_4 == 15){}
  else{
    full_4 += 1;
    js.textContent = full_4 + "%";
    sass.textContent = full_4 + "%";
  }
if(full_5 == 10){}
  else{
    full_5 += 1;
    illstr.textContent = full_5 + "%";
  }
}, 30);


// Carrousel













let isMouseDown = false;
let currentMousePos = 0;
let lastMousePos = 0;
let lastMoveTo = 0;
let moveTo = 0

// Function creer un carousel
const createCarousel = () => {
    const carouselAcces = onResize();
    const length = carouselItem.length;
    const deg = 360 / length;
    const gap = 20; 
    const tz = distanceZ(carouselAcces.w, length, gap)


    const fov = calculateFov(carouselAcces);
    const height = calculateHeight(tz);

    container.style.width = tz * 5 + gap * length + "px";
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
    const height = t * 3 * z;

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
