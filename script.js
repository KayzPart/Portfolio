// animation timeline

const allRonds = document.querySelectorAll('.rond');
const allBoxes = document.querySelectorAll('.box');

const controller = new ScrollMagic.Controller()

allBoxes.forEach(box => {

    for(i = 0; i < allRonds.length; i++){

        if(allRonds[i].getAttribute('data-anim') === box.getAttribute('data-anim')){

            let tween = gsap.from(box, {y: -50, opacity: 0, duration: 0.5})

            let scene = new ScrollMagic.Scene({
                triggerElement: allRonds[i],
                reverse: false
            })
            .setTween(tween)
            // .addIndicators()
            .addTo(controller)
        }
    }
})

//************************************* */

const card = document.querySelector('.card');
const imageZoom = document.querySelector('.image-zoom');
const blocFocusTop = document.querySelector('.bloc-focus-top');
const blocFocusBottom = document.querySelector('.boc-focus-bottom');
const blocContent = document.querySelector('.bloc-content-show');
const title = document.querySelector('.bloc-content-show h2')
const dowloadLogo = document.querySelector('.bloc-content-show img')
const allTxt = document.querySelectorAll('.bloc-content-show p')

const TLANIM = gsap.timeline({paused: true});


TLANIM
.fromTo(imageZoom, {sclae: 1}, {scale: 2, y:-50, x:200, duration: 0.4, ease:ExpoScaleEase.config(1,2, 'power2.inOut')})
.to(blocFocusTop, {top: -30, left: -30, duration: 0.1}, 0.5)
.to(blocFocusBottom, {bottom: -30, right: -30, duration: 0.1}, '-=0.1')
.to(blocContent, {bottom: 200, duration: 0.2}, '-=0.1')
.from(title, {opacity: 0, duration: 0.2}, '-=0.1')
.from(dowloadLogo, {scale: 0, duration: 0.2})
.from(allTxt, {opacity: 0, duration: 0.3, stagger: 0.2})


card.addEventListener('mouseenter', () => {
    TLANIM.play();
})
card.addEventListener('mouseleave', () => {
    TLANIM.reverse();
})
