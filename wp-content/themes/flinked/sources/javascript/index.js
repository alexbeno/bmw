import NavColor from './NavColor.js'
import Slider from './Slider.js'
import BurgerMenu from './BurgerMenu.js'
import ajax from './ajax.js'
import NavConfig from './NavConfig.js'
import View360  from './View360.js'
import MobilView  from './MobilView.js'
import Devis  from './Devis.js'
import Loader  from './Loader.js'
import IECallback  from './IECallback.js'
import { initScrollAnim } from './scroll_anim'


function init() {

  initScrollAnim();

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

  // let navConfig = new NavConfig();
  // navConfig.init();

  if(window.innerWidth > 1025) {
    /**
    * 360 views
    */

    let view360 = new View360();
    view360.init();
  }

  if(window.innerWidth <= 1126) {

    /**
    * mobil views
    */

    let mobilView = new MobilView();
    mobilView.init();
  }

  /**
  * pop up devis
  */

  let devis = new Devis();
  devis.init();

  /**
  * Loader
  */

  let loader = new Loader();
  loader.init();

  /**
  * IECallback.js
  */

  let iECallback = new IECallback();
  iECallback.init();

}

window.onload = init;