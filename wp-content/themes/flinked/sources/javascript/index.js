import NavColor from './NavColor.js'
import Slider from './Slider.js'
import BurgerMenu from './BurgerMenu.js'
import ajax from './ajax.js'
import NavConfig from './NavConfig.js'


function init() {
  
  /**
  * change color when container is not an img
  */

  let navColor = new NavColor();
  navColor.init();

  /**
  * sliders class
  */

  let slider = new Slider();
  slider.init();


  /**
  * open responsive menu
  */

  let burger = new BurgerMenu();
  burger.init();

  /**
  * navigation of configurateur
  */

  let navConfig = new NavConfig();
  navConfig.init();
  
}

window.onload = init;