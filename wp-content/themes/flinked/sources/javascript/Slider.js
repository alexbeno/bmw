class Slider
{
    /**
     * Constructor
     */
    constructor( options )
    {
      this.slider = document.querySelector('.slider');
      this.mover = document.querySelector('.slider__container__mover');
      this.items = document.querySelectorAll('.slider__container__item');
      this.left = document.querySelector('.slider__button__item--left');
      this.right = document.querySelector('.slider__button__item--right');
      this.index = 0;
      this.count;
      this.width;
    }
    responsive() {
      let that = this;
      window.addEventListener('resize', function(){
        that.width = that.items[0].offsetWidth;
        let x = - that.index * that.width;      
        that.moves(x);  
      });
    }
    moves(x) {
      let that = this;  
      that.mover.style.transform = 'translateX(' + x + 'px)';
      
    }
    controle() {
      let that = this;
      this.count = this.items.length;
      this.width = this.items[0].offsetWidth;

      this.right.addEventListener('click', function( event ){        
        event.preventDefault();    
        that.index++;     
        if( that.index >= that.count ) 
          that.index = 0; 
        let x = - that.index * that.width;      
        that.moves(x);       
      });
      this.left.addEventListener('click', function( event ){
        
          event.preventDefault();
        
          that.index--;
        
          if( that.index < 0 ) 
            that.index = that.count - 1 ;
        
          let x = - that.index * that.width;
        
          that.moves(x);
        
        });
    }
    init() 
    {
      if(this.slider != null) {
        this.controle();
        this.responsive();
      }
    }
}

export default Slider