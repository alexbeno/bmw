import black_blue from './data/color/grey.js'

class View360
{
    /**
     * Constructor
     */
    constructor( options )
    {
      this.main = document.querySelector('.config__car');
      this.container = document.querySelector('.config__car__image');
      this.button = document.querySelector('.config__3D__image');
      this.image = new Image();
      this.index = 0;
      this.size = black_blue.sortKey.length;
      this.indexDrag = 1;
    }
    initDisplay() {     
      let current = black_blue[black_blue.sortKey[13]].url;
      this.container.setAttribute('src', current)
    }
    loadingCallBack(data) {
      let that = this;
      this.image.onload = function()
      {
        if(that.index < that.size ) {
          that.loadingImage(that.index);
          data.load = true;
        }
        else {
          that.initDisplay();
          that.startView();
        }
      }
    }
    loadingImage(index) {
      let currentKey = black_blue.sortKey[index];
      this.image.src = black_blue[black_blue.sortKey[index]].url;

      this.loadingCallBack(black_blue[black_blue.sortKey[index]]);

      this.index++
    }
    update(image) {
      this.container.setAttribute('src', image)
    }
    auto() {
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
        let current = "black_blue_" + index
        that.update(black_blue[current].url)
      }, 100);
    }
    dragCallback(x) {
      // console.log(this.indexDrag)
      if(x < 0) {
        if(this.indexDrag >= this.size )
        {
          this.indexDrag = 1;
        }
        else {
          this.indexDrag++
          // console.log(this.indexDrag)
        }
      }
      else if(x > 0) {
        if(this.indexDrag <= 1 )
        {
          this.indexDrag = this.size;
        }
        else {
          this.indexDrag--
          // console.log('hey')
        }
      }
      let current = "black_blue_" + this.indexDrag
      this.update(black_blue[current].url)
    }
    event () {
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
          // console.log(x)
        }
      });
    }
    startView() {
      let that = this;
      this.button.addEventListener('click', function(e){
        that.auto();
      });
    }
    init() 
    {
      if(this.main != null) {
        this.loadingImage(this.index);
        // this.event();
      }
    }
}

export default View360



    // loadingCallBack(data) {
    //   this.image.onload = function()
    //   {
    //      data.load = true;
    //      console.log('fini mec');
    //   }
    //   this.index++
    //   if(this.index < black_blue.sortKey.length -1) {
    //     this.loadingImage(this.index)
    //   }
    //   else {
    //     console.log('fini la boucle')
    //   }
    // }
    // loadingImage() {
    //   let that = this;
    //   for (let key in black_blue) {
    //     that.image.src = black_blue[key].url;
    //     this.loadingCallBack(black_blue[key]);
    //   }
    //   // console.log(black_blue[1])
    // }