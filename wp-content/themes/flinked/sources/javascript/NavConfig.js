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
          })
        }
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