import CurrentConfig from './CurrentConfig.js'

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

    clean() {
      let item = document.querySelectorAll('.devis_item-container');
      for (let index = 0; index <item.length; index++) {
        item[index].remove();
        
      }
    }

    fillConfig(section, name, price, slug) {
      let item = {};
      item.container = document.createElement('div')
      item.section = document.createElement('p')
      item.name = document.createElement('p')
      item.price = document.createElement('p')

      item.container.classList.add('devis_item-container')
      item.name.classList.add('devis_item-container_item')
      item.price.classList.add('devis_item-container_item')
      item.section.classList.add('devis_item-container_item')

      item.name.innerText = name
      item.price.innerText = price
      item.section.innerText = section

      item.name.setAttribute('data-slug', slug);

      this.main.appendChild(item.container)
      item.container.appendChild(item.section)
      item.container.appendChild(item.name)
      item.container.appendChild(item.price)

    }

    getConfig() {
      let config = CurrentConfig['listOfOption'];
      let that = this;
      for (let key in config) {

        let section = config[key]['section'];
        let name = config[key]['name'];
        let price = config[key]['price'];
        let slug = config[key]['slug'];

        if(slug != null) {
          that.fillConfig(section, name, price, slug)
        }
      }
    }

    show() {
      let that = this;
      this.main.classList.add('config__pop--active')
      this.backward.classList.add('config__opacity--active')
      setTimeout(function(){
        that.closes();
        that.getConfig()
      }, 200);
    }
    unshow() {
      this.main.classList.remove('config__pop--active')
      this.backward.classList.remove('config__opacity--active')
      this.clean();
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