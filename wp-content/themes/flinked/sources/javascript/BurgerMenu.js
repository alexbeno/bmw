class BurgerMenu
{
    /**
     * Constructor
     */
    constructor( options )
    {
      this.button = document.querySelector('.header--responsive__button');
      this.close = document.querySelector('.header--responsive__close');
      this.nav = document.querySelector('.header--responsive__menu');
    }
    openMenu() {
      let that = this;
      this.button.addEventListener('click', function(e){
        that.nav.style.transform="translateX(0)";
      })
    }
    closeMenu() {
      let that = this;
      this.close.addEventListener('click', function(e){
        that.nav.style.transform="translateX(100vw)";
      })
    }
    init() 
    {
      if(this.nav != null) {
        this.openMenu();
        this.closeMenu();
      }
    }
}

export default BurgerMenu