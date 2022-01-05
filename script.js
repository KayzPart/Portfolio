// animation timeline

const allRonds = document.querySelectorAll('.rond');
const allBoxes = document.querySelectorAll('.box');

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