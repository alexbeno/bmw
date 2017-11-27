import CurrentConfig from './CurrentConfig.js'

/**
 * color + jante 1
 */
import sophisto_grey_blue from './data/color/sophisto_grey_blue.js'
import sophisto_grey from './data/color/sophisto_grey.js'
import ionic_silver from './data/color/ionic_silver.js'
import crystal_white_grey from './data/color/crystal_white_grey.js'
import crystal_white_blue from './data/color/crystal_white_blue.js'

/**
 * jante 2
 */
import crystal_white_blue_jante_625_turbine from './data/jante/crystal_white_blue_jante_625_turbine.js'
import ionic_silver_jante_625_turbine from './data/jante/ionic_silver_jante_625_turbine.js'
import sophisto_grey_blue_jante_625_turbine from './data/jante/sophisto_grey_blue_jante_625_turbine.js'
import sophisto_grey_jante_625_turbine from './data/jante/sophisto_grey_jante_625_turbine.js'
import crystal_white_grey_jante_625_turbine from './data/jante/crystal_white_grey_jante_625_turbine.js'

/**
 * jante 3
 */
import sophisto_grey_blue_jante_470_rayons from './data/jante/sophisto_grey_blue_jante_470_rayons.js'
import sophisto_grey_jante_470_rayons from './data/jante/sophisto_grey_jante_470_rayons.js'
import crystal_white_grey_jante_470_rayons from './data/jante/crystal_white_grey_jante_470_rayons.js'
import ionic_silver_jante_470_rayons from './data/jante/ionic_silver_jante_470_rayons.js'
import crystal_white_blue_jante_470_rayons from './data/jante/crystal_white_blue_jante_470_rayons.js'

class MobilView
{
    /**
     * Constructor
     */
    constructor( options )
    {
      this.main = document.querySelector('.config__car');
      this.container = document.querySelector('.config__car__imageMobil');
      this.checkOption = document.querySelectorAll('.config__nav__item__sub__link');

      this.colorAllOtion = {
        sophisto_grey : {
          obj: sophisto_grey  ,
          slug: "sophisto_grey_",
        },
        sophisto_grey_blue: {
          obj: sophisto_grey_blue,
          slug: "sophisto_grey_blue_",
        },
        ionic_silver: {
          obj: ionic_silver,
          slug: "ionic_silver_",
        },
        crystal_white_grey: {
          obj: crystal_white_grey,
          slug: "crystal_white_grey_",
        },
        crystal_white_blue: {
          obj: crystal_white_blue,
          slug: "crystal_white_blue_",
        },
        crystal_white_blue_jante_625_turbine: {
          obj: crystal_white_blue_jante_625_turbine,
          slug: "crystal_white_blue_jante_625_turbine_",
        },
        ionic_silver_jante_625_turbine: {
          obj: ionic_silver_jante_625_turbine,
          slug: "ionic_silver_jante_625_turbine_",
        },
        sophisto_grey_blue_jante_625_turbine: {
          obj: sophisto_grey_blue_jante_625_turbine,
          slug: "sophisto_grey_blue_jante_625_turbine_",
        },
        sophisto_grey_jante_625_turbine: {
          obj: sophisto_grey_jante_625_turbine,
          slug: "sophisto_grey_jante_625_turbine_",
        },
        crystal_white_grey_jante_625_turbine: {
          obj: crystal_white_grey_jante_625_turbine,
          slug: "crystal_white_grey_jante_625_turbine_",
        },
        sophisto_grey_blue_jante_470_rayons: {
          obj: sophisto_grey_blue_jante_470_rayons,
          slug: "sophisto_grey_blue_jante_470_rayons_",
        },
        sophisto_grey_jante_470_rayons: {
          obj: sophisto_grey_jante_470_rayons,
          slug: "sophisto_grey_jante_470_rayons_",
        },
        crystal_white_grey_jante_470_rayons: {
          obj: crystal_white_grey_jante_470_rayons,
          slug: "crystal_white_grey_jante_470_rayons_",
        },
        ionic_silver_jante_470_rayons: {
          obj: ionic_silver_jante_470_rayons,
          slug: "ionic_silver_jante_470_rayons_",
        },
        crystal_white_blue_jante_470_rayons: {
          obj: crystal_white_blue_jante_470_rayons,
          slug: "crystal_white_blue_jante_470_rayons_",
        },
      }

      this.currentKey = this.colorAllOtion['sophisto_grey_blue'];
      
      this.colorData = this.currentKey.obj['sophisto_grey_blue_16'];
      this.colorDataText = this.currentKey.slug;
    }

    update(image) {
      /**
       * update image url
       * @param image = image to load
      */

      this.container.setAttribute('src', image)
    }

    changeColor(slug) {
      /**
       * change the current color config
       * @param slug = slug of the modification
       * @function loadingimage();
       * @function initDisplay();
       */

      this.currentKey = this.colorAllOtion[slug];
      this.index = 0;
      this.colorData = this.currentKey.obj[ slug +'_16'];
      this.colorDataText = this.currentKey.slug;
      this.update(this.colorData.url)
    }

    optionClick() {
      /**
       * click event for option selection
       * @function changeColor();
       */

      let optionButton = document.querySelectorAll('.config__term__item__adds--color');
      let sizeOption =  optionButton.length;
      let that = this;
      for(let i = 0; i < sizeOption; i++ ) {
        optionButton[i].addEventListener('click', function(e) {
          e.preventDefault();
          let slug = this.getAttribute('data-slug');
          CurrentConfig['color'] = slug;
          if(CurrentConfig['jante'] === null) {
            that.changeColor(slug);
          }

          else {
            let configJante = CurrentConfig['jante'];
            let theSlug = slug + '_' + configJante 
            that.changeColor(theSlug);
          }
        })
      }
    }

    optionClickJante() {
      /**
       * click event for option selection
       * @function changeColor();
       */

      let optionButton = document.querySelectorAll('.config__term__item__adds--jante');
      let sizeOption =  optionButton.length;
      let that = this;
      for(let i = 0; i < sizeOption; i++ ) {
        optionButton[i].addEventListener('click', function(e) {
          e.preventDefault();
          let slug = this.getAttribute('data-slug');
          if(slug === "jante_de_serie") {
            slug = null;
            let currentSlug = CurrentConfig['color'];
            that.changeColor(currentSlug);
          }
          else {
            let currentSlug = CurrentConfig['color'] + "_" + slug;
            that.changeColor(currentSlug);
          }
          CurrentConfig['jante'] = slug;
        })
      }
    }

    checkClick() {
      /**
       * check when the click can be done (after ajax load)
       * @function optionClick();
       * @function optionClickJante();
       */
      let sizeOption = this.checkOption.length;
      let that = this;
      for(let i = 0; i < sizeOption; i++ ) {
        that.checkOption[i].addEventListener('click', function(e) {
          e.preventDefault();
          let checkLoop = setInterval(function(){
            let check = document.querySelector('.config__term__item');
            if(check != null)
            {
              that.optionClick();
              that.optionClickJante();
              clearInterval(checkLoop)
            }
          }, 10);
        })
      }
    }
    init() 
    {
      if(this.main != null) {
        this.update(this.colorData.url)
        this.checkClick();
      }
    }
}

export default MobilView