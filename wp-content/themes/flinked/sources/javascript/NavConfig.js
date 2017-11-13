class NavColor
{
    /**
     * Constructor
     */
    constructor( options )
    {
        this.nav = document.querySelectorAll('.config__nav__container');
        this.item = document.querySelectorAll('.config__nav__item');
        this.subItem = document.querySelectorAll('.config__nav__item');
    }
    select() {
      let activeItem = document.querySelector('.config__nav__sub--active');
      if(activeItem === null) {
        let size = this.nav.length;
        let that = this;
        for(let i = 0; i < size; i++ ) {
          that.nav[i].addEventListener('click', function(e) {
            e.preventDefault();
            this.childNodes[3].classList.add('config__nav__sub--active');
            setTimeout(() => {
              this.childNodes[3].style.transform="translateX(0)";
              that.returns();
            }, 100);
          })
        }
      }
    }
    returns() {
      let activeItem = document.querySelector('.config__nav__sub--active');
      if(activeItem != null) {
        activeItem.childNodes[1].addEventListener('click', function(e){
          e.preventDefault();
          activeItem.style.transform="translateX(100vw)";
          setTimeout(() => {
            activeItem.classList.remove('config__nav__sub--active');
          }, 100);
        })
      }
    }
    init() 
    {
      if(this.nav != null) {
        this.select();
      }
      else {
        //silence my friend
      }
    }
}

export default NavColor