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
        this.next = document.querySelector('.config__nav__histo__arrow--next');
        this.back = document.querySelector('.config__nav__histo__arrow--back');
    }
    select() {
      let activeItem = document.querySelector('.config__nav__sub--active');
      if(activeItem === null) {
        let size = this.nav.length;
        let that = this;

        for(let i = 0; i < size; i++ ) {
          that.nav[i].addEventListener('click', function(e) {
            e.preventDefault();
            let current = this;
            this.classList.add('sideNav--active');
            that.returns(current);
            // if(this.childNodes[3]) {
            //   let current = this.childNodes[3];
            //   this.childNodes[3].classList.add('config__nav__sub--active');
            //   setTimeout(() => {
            //     this.childNodes[3].style.transform="translateX(0)";
            //     that.returns(current);
            //   }, 100);
            // }
          })
        }
      }
    }
    forward (current) {
      let currentActive = document.querySelector('.config__nav__histo__arrow--active');
      let activeArrow = document.querySelector('.config__nav__histo__arrow--next');
      let activeArrowB = document.querySelector('.config__nav__histo__arrow--back');

      currentActive.classList.remove('config__nav__histo__arrow--active');
      activeArrow.classList.add('config__nav__histo__arrow--active');

      this.next.addEventListener('click', function(e){
        current.classList.add('config__nav__sub--active');

        currentActive = document.querySelector('.config__nav__histo__arrow--active');
        currentActive.classList.remove('config__nav__histo__arrow--active');
        activeArrowB.classList.add('config__nav__histo__arrow--active');
        
        setTimeout(() => {
          current.style.transform="translateX(0)";
        }, 100);
      });
    }
    returns(current) {
      let activeItem = document.querySelector('.config__nav__sub--active');
      let currentActive = document.querySelector('.config__nav__histo__arrow--active');
      let activeArrow = document.querySelector('.config__nav__histo__arrow--back');
      let that = this;

      if(activeItem != null) {

        if(currentActive != null) {
          currentActive.classList.remove('config__nav__histo__arrow--active');
        }
        activeArrow.classList.add('config__nav__histo__arrow--active');

        this.back.addEventListener('click', function(e){
          console.log('yoyoyoy')
          e.preventDefault();
          activeItem.style.transform="translateX(100vw)";
          setTimeout(() => {
            activeItem.classList.remove('config__nav__sub--active');
            that.forward(current);
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