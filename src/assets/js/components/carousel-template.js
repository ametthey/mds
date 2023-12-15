import 'lazysizes';
import Glide, { Autoplay } from '@glidejs/glide/dist/glide.modular.esm'
import imagesLoaded from 'imagesloaded';

const images = document.querySelectorAll('.glide-image');
const imagesLoad = imagesLoaded( images );

function startSlider() {

    imagesLoad.on( 'done', allLoaded )

    function allLoaded() {
        slider.mount({ Autoplay });
    }

    const slider = new Glide('.container-slider-element',  {
        type: 'carousel',
        // autoplay: 3000, // Set the autoplay interval in milliseconds (e.g., 5000 for 5 seconds)
        // animationDuration: 1000, // Animation duration in milliseconds
        // animationTimingFunc: 'ease-out',
        perView: 2,
        // keyboard: true, // Enable keyboard navigation
        rewind: false, // Disable rewinding when reaching the first or last slide
        startAt: 0, // Start at the first slide (index 0)
    });


    slider.on('run', function() {
        const current = slider.index + 1; // Index de l'image actuelle, avec ajout de 1 pour commencer à partir de 1 plutôt que de 0
        const currentElement = document.querySelector('.glide__current');
        currentElement.textContent = current;
    });

    /****************************************************
    * Previous and Next
    * *************************************************/
    const prev = document.querySelector('.glide__arrow--left');
    const next = document.querySelector('.glide__arrow--right');
    prev.addEventListener( 'click', (e) => {
        event.preventDefault();
        slider.go('<');
    });
    next.addEventListener( 'click', (e) => {
        event.preventDefault();
        slider.go('>');
    });

}

export { startSlider };
