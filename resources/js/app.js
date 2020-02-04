require('./bootstrap');
require('./dashboard/app');

import 'owl.carousel/dist/assets/owl.carousel.css';
import 'owl.carousel';

$(document).ready(function(){
    $('.owl-carousel').owlCarousel();
  });