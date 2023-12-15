import { backToTop } from './components/back-to-top';
import { grid } from './components/grid';
import { startSlider } from './components/carousel-template';

window.addEventListener( 'load', () => {
    backToTop();
    startSlider();
    grid();
});
