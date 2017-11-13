class NavColor
{
    /**
     * Constructor
     */
    constructor( options )
    {
        this.nav = document.querySelector('.header');
        this.nav_item = document.querySelector('.header__menu');
        this.change_point = document.querySelector('.color-nav');
        this.body = document.querySelector('body');
    }
    changeParam(effect) 
    {
      if(effect === "color") {
        this.nav.classList.add('header--scroll');
        this.nav_item.classList.add('header__menu--scroll');
      }
      else if(effect === "none") {
        this.nav.classList.remove('header--scroll');
        this.nav_item.classList.remove('header__menu--scroll');
      }
    }
    getScroll() 
    {
      let that = this;
      let position = this.change_point.offsetHeight;
      window.addEventListener('scroll', function(e){
        let bodyScroll = that.body.scrollTop || document.documentElement.scrollTop;
        if(bodyScroll >= position )
        {
          that.changeParam('color');
        }
        else if(bodyScroll <= position )
        {
          that.changeParam('none');
        }
      })
    }
    init() 
    {
      if(this.change_point != null) {
        this.getScroll();
      }
      else {
        this.changeParam('color');
      }
    }
}

export default NavColor