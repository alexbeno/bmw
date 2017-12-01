import CurrentConfig from './CurrentConfig.js'


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
      this.footer = document.querySelector('.footer');
      this.loaderContent = document.querySelector('.loader');
      this.price = document.querySelector('.config__price');
      this.image = new Image();
      this.index = 0;
      this.indexDrag = 0;
      this.theviewstart = false;

      this.colorAllOtion = {
        sophisto_grey : {
          image: baseurl.siteurl + "/wp-content/themes/flinked/dist/assets/image/configurateur/couleurs/sophisto_grey.png" ,
          slug: "sophisto_grey_",
        },
        sophisto_grey_blue: {
          image: baseurl.siteurl + "/wp-content/themes/flinked/dist/assets/image/configurateur/couleurs/sophisto_grey_blue.png" ,
          slug: "sophisto_grey_blue_",
        },
        ionic_silver: {
          image: baseurl.siteurl + "/wp-content/themes/flinked/dist/assets/image/configurateur/couleurs/ionic_silver.png" ,
          slug: "ionic_silver_",
        },
        crystal_white_grey: {
          image: baseurl.siteurl + "/wp-content/themes/flinked/dist/assets/image/configurateur/couleurs/crystal_white_grey.png" ,
          slug: "crystal_white_grey_",
        },
        crystal_white_blue: {
          image: baseurl.siteurl + "/wp-content/themes/flinked/dist/assets/image/configurateur/couleurs/crystal_white_blue.png" ,
          slug: "crystal_white_blue_",
        },
        crystal_white_blue_jante_625_turbine: {

          image: baseurl.siteurl + "/wp-content/themes/flinked/dist/assets/image/configurateur/jante/crystal_white_blue_jante_625_turbine.png" ,
          slug: "crystal_white_blue_jante_625_turbine_",
        },
        ionic_silver_jante_625_turbine: {
          image: baseurl.siteurl + "/wp-content/themes/flinked/dist/assets/image/configurateur/jante/ionic_silver_jante_625_turbine.png" ,
          slug: "ionic_silver_jante_625_turbine_",
        },
        sophisto_grey_blue_jante_625_turbine: {
          image: baseurl.siteurl + "/wp-content/themes/flinked/dist/assets/image/configurateur/jante/sophisto_grey_blue_jante_625_turbine.png" ,
          slug: "sophisto_grey_blue_jante_625_turbine_",
        },
        sophisto_grey_jante_625_turbine: {
          image: baseurl.siteurl + "/wp-content/themes/flinked/dist/assets/image/configurateur/jante/sophisto_grey_jante_625_turbine.png" ,
          slug: "sophisto_grey_jante_625_turbine_",
        },
        crystal_white_grey_jante_625_turbine: {
          image: baseurl.siteurl + "/wp-content/themes/flinked/dist/assets/image/configurateur/jante/crystal_white_grey_jante_625_turbine.png" ,
          slug: "crystal_white_grey_jante_625_turbine_",
        },
        sophisto_grey_blue_jante_470_rayons: {
          image: baseurl.siteurl + "/wp-content/themes/flinked/dist/assets/image/configurateur/jante/sophisto_grey_blue_jante_470_rayons.png" ,
          slug: "sophisto_grey_blue_jante_470_rayons_",
        },
        sophisto_grey_jante_470_rayons: {
          image: baseurl.siteurl + "/wp-content/themes/flinked/dist/assets/image/configurateur/jante/sophisto_grey_jante_470_rayons.png" ,
          slug: "sophisto_grey_jante_470_rayons_",
        },
        crystal_white_grey_jante_470_rayons: {
          image: baseurl.siteurl + "/wp-content/themes/flinked/dist/assets/image/configurateur/jante/crystal_white_grey_jante_470_rayons.png" ,
          slug: "crystal_white_grey_jante_470_rayons_",
        },
        ionic_silver_jante_470_rayons: {
          image: baseurl.siteurl + "/wp-content/themes/flinked/dist/assets/image/configurateur/jante/ionic_silver_jante_470_rayons.png" ,
          slug: "ionic_silver_jante_470_rayons_",
        },
        crystal_white_blue_jante_470_rayons: {
          image: baseurl.siteurl + "/wp-content/themes/flinked/dist/assets/image/configurateur/jante/crystal_white_blue_jante_470_rayons.png" ,
          slug: "crystal_white_blue_jante_470_rayons_",
        },
      }

      this.currentKey = this.colorAllOtion['sophisto_grey_blue'];

      this.colorData = this.currentKey.image;
      this.colorDataText = this.currentKey.slug;
    }
    initDisplay() {
      /**
       * load the view without 360 display
       * @param index = index of the first image
      */

      let current = this.colorData;
      let that = this;
      this.container.setAttribute('src', current)
      setTimeout(function(){
        that.loader();
      }, 1300);
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

    loadingCallBack(image) {
      /**
       * verfication when image is finish to load for display it
       * @param index = index of the current image
       * @param data = global object of the current image
       * @function loadingImage();
       * @function initDisplay();
       * @function startView();
      */

      let that = this;
      this.image.setAttribute('src', image)
      this.image.onload = function()
      {
        that.initDisplay();
      }
    }

    loadingImage(current) {
      /**
       * recusive function for load all image for the 360 view
       * @param index = index of the current image
       * @param change = condition for know if they are a color change
       * @param current = index of image to display first
       * @function loadingCallBack();
       */
      this.loadingCallBack(current);
    }
    update() {
      /**
       * update image url
       * @param image = image to load
      */
      let size = document.querySelector('.config__car__imageContainer').offsetWidth;
      this.container.style.transform = "translateX(-" + this.indexDrag * 1024 + "px)";
    }

    dragCallback(x) {
      /**
       * update image when drag event was done
       * @param x = for know the direction of the drag event
       * @function update();
       */

      if(x < 0) {
        if(this.indexDrag >= 36 )
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
          this.indexDrag = 36;
        }
        else {
          this.indexDrag--
        }
      }
      let current = this.colorDataText + this.indexDrag
      this.update()
    }

    event () {
      /**
       * event for detect the drag
       * @function dragCallback();
       */
      let that = this;
      let element = document.querySelector('.config__car__imageContainer');
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

    changeColor(slug) {
      /**
       * change the current color config
       * @param slug = slug of the modification
       * @function loadingimage();
       * @function initDisplay();
       */

      this.currentKey = this.colorAllOtion[slug];
      this.index = 0;
      this.colorData = this.currentKey.image;
      this.colorDataText = this.currentKey.slug;
      this.loadingImage(this.colorData);

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
        this.initDisplay()
        this.checkClick();
        this.event();
        this.footer.style.display ="none";
      }
    }
}

export default View360