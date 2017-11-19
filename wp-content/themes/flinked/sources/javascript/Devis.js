class Devis
{
    /**
     * Constructor
     */
    constructor( options )
    {
      this.main = document.querySelector('.config__pop');
      this.button = document.querySelector('.config__price__devis')
      this.backward = document.querySelector('.config__opacity')
    }

    show() {
      let that = this;
      this.main.classList.add('config__pop--active')
      this.backward.classList.add('config__opacity--active')
      setTimeout(function(){
        that.closes();
      }, 200);
    }
    unshow() {
      this.main.classList.remove('config__pop--active')
      this.backward.classList.remove('config__opacity--active')
    }
    open() {
      let that = this;
      this.button.addEventListener('click', function(e) {
        e.preventDefault();
        that.show();
      })
    }
    closes() {
      let that = this;
      let close = document.querySelector('.config__opacity--active')
      if(close != null) {
        close.addEventListener('click', function(e) {
          e.preventDefault();
          that.unshow();
        })
      }
    }
    init() 
    {
      if(this.main != null) {
        this.open()
      }
    }
}

export default Devis