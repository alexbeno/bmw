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

class View360
{
    /**
     * Constructor
     */
    constructor( options )
    {
      let that = this;
      this.main = document.querySelector('.config__car');
      this.container = document.querySelector('.config__car__image');
      this.checkOption = document.querySelectorAll('.config__nav__item__sub__link');
      this.loaderContent = document.querySelector('.loader');
      this.price = document.querySelector('.config__price');
      this.image = new Image();
      this.index = 0;
      this.indexDrag = 13;
      this.theviewstart = false;

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

      this.colorData = this.currentKey.obj;
      this.colorDataText = this.currentKey.slug;
      this.size = this.currentKey.obj.sortKey.length;
    }
    initDisplay(index) {
      /**
       * load the view without 360 display
       * @param index = index of the first image
      */

      let current;
      if(this.theviewstart === true) {
        current = this.colorData[this.colorData.sortKey[index - 1]].url;
      }
      else {
        current = this.colorData[this.colorData.sortKey[13]].url;
      }
      this.container.setAttribute('src', current)
    }

    loader() {
      let that = this;
      this.loaderContent.style.opacity = 0;
      setTimeout(function(){
        that.loaderContent.classList.add('loader--unactive');
        that.container.style.opacity = 1;
      }, 100);
    }

    initloader() {
      let that = this;
      this.container.style.opacity = 0;
      setTimeout(function(){
        that.loaderContent.classList.remove('loader--unactive');
        that.loaderContent.style.opacity = 1;
      }, 100);
    }

    loadingCallBack(data, index) {
      /**
       * verfication when image is finish to load for display it
       * @param index = index of the current image
       * @param data = global object of the current image
       * @function loadingImage();
       * @function initDisplay();
       * @function startView();
      */

      let that = this;
      this.image.onload = function()
      {
        if(that.index < that.size ) {
          if(index === 13) {
            that.loadingImage(that.index);
          }
          else {
            that.loadingImage(that.index, true, index);
          }
          data.load = true;
        }
        else {
          that.loader();
          that.initDisplay(index);
          // that.startView();
          that.event();
        }
      }
    }
    loadingImage(index, change, current) {
      /**
       * recusive function for load all image for the 360 view
       * @param index = index of the current image
       * @param change = condition for know if they are a color change
       * @param current = index of image to display first
       * @function loadingCallBack();
       */

      let currentKey = this.colorData.sortKey[index];
      this.image.src = this.colorData[this.colorData.sortKey[index]].url;

      if(change === true) {
        this.loadingCallBack(this.colorData[this.colorData.sortKey[index]], current);
      }
      else {
        this.loadingCallBack(this.colorData[this.colorData.sortKey[index]], 13);
      }

      this.index++
    }
    update(image) {
      /**
       * update image url
       * @param image = image to load
      */

      this.container.setAttribute('src', image)
    }

    auto() {
      /**
      * auto 360 view
      * @function update();
      * @function event();
      */

      let that = this;
      let index = 16;
      let inter = setInterval(function(){
        if(index < that.size) {
          index++
        }
        else {
          that.event();
          clearInterval(inter);
        }
        let current = that.colorDataText + index
        that.update(that.colorData[current].url)
      }, 100);
    }

    dragCallback(x) {
      /**
       * update image when drag event was done
       * @param x = for know the direction of the drag event
       * @function update();
       */

      if(x < 0) {
        if(this.indexDrag >= this.size )
        {
          this.indexDrag = 1;
        }
        else {
          this.indexDrag++
        }
      }
      else if(x > 0) {
        if(this.indexDrag <= 1 )
        {
          this.indexDrag = this.size;
        }
        else {
          this.indexDrag--
        }
      }
      let current = this.colorDataText + this.indexDrag
      this.update(this.colorData[current].url)
    }

    event () {
      /**
       * event for detect the drag
       * @function dragCallback();
       */

      let that = this;
      let element = document.querySelector('.config__car__image');
      let x = 0;
      let y = 0;
      interact(element)
      .draggable({
        max : 1,
        snap: {
          targets: [
            interact.createSnapGrid({ x: 30, y: 30 })
          ],
          range: Infinity,
          relativePoints: [ { x: 0, y: 0 } ]
        },
        inertia: false,
        restrict: {
          restriction: element.parentNode,
          elementRect: { top: 0, left: 0, bottom: 1, right: 1 },
          endOnly: true
        }
      })

      .on('dragmove', function (event) {
        x = event.dx;
        y = event.dy;
        if(x != 0 && x < 100 && x > -100) {
          that.dragCallback(x);
        }
      });
    }

    startView() {
      /**
       * launch the 360 auto view
       * @function auto()
       */
      let that = this;
      this.button.addEventListener('click', function(e){
        if(that.theviewstart === false)   {
          that.auto();
          that.theviewstart = true;
        }
      });
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
      this.colorData = this.currentKey.obj;
      this.colorDataText = this.currentKey.slug;

      if(this.colorData[this.colorData.sortKey[10]].load === false)
      {
        this.initloader();
        this.loadingImage(this.index, true, this.indexDrag);
      }
      else {
        this.initDisplay(this.indexDrag - 1);
        this.loader();
      }

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
        this.loadingImage(this.index, false, 0);
        this.checkClick();
      }
    }
}

export default View360
// export {View360, CurrentConfig }