import 'slick-carousel/slick/slick';
import Slider from '../modules/Slider';

export default {
  init() {
    // JavaScript to be fired on the home page
    new Slider().init();
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
