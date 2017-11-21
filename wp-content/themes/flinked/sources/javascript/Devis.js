import CurrentConfig from './CurrentConfig.js'

class Devis
{
    /**
     * Constructor
     */
    constructor( options )
    {
      this.main = document.querySelector('.config__pop');
      this.mainitem = document.querySelector('.config__pop__mainItem');
      this.mainoption = document.querySelector('.config__pop__mainOption');
      this.priceItem = document.querySelector('.config__pop__choix__buy__price__span');
      this.global= document.querySelector('.config');
      this.button = document.querySelector('.config__price__devis')
      this.close;
    }

    clean() {
      let item = document.querySelectorAll('.devis_item-container:');
      for (let index = 0; index <item.length; index++) {
        item[index].remove();
        
      }
    }

    fillConfig(section, name, price, slug) {
      let item = {};
      item.container = document.createElement('div')
      item.section = document.createElement('p')
      item.name = document.createElement('p')

      item.container.classList.add('devis_item-container')
      item.name.classList.add('devis_item-container_name')
      item.section.classList.add('devis_item-container_section')

      item.name.innerText = name
      item.section.innerText = section

      item.name.setAttribute('data-slug', slug);

      this.mainitem.appendChild(item.container)
      item.container.appendChild(item.section)
      item.container.appendChild(item.name)

    }

    fillOption(name, price, slug) {
      let item = {};
      item.container = document.createElement('div')
      item.section = document.createElement('p')
      item.name = document.createElement('p')

      item.container.classList.add('devis_item-containerOption')
      item.name.classList.add('devis_item-containerOption_name')
      item.section.classList.add('devis_item-containerOption_section')

      item.name.innerText = name

      item.name.setAttribute('data-slug', slug);

      this.mainoption.appendChild(item.container)
      item.container.appendChild(item.name)
    }

    fillPrice() {
      let priceToInsert = Intl.NumberFormat().format(CurrentConfig.price) + ',00'; 
      this.priceItem.innerText = priceToInsert;
    }

    saveOptionArray(config) {
      let size = config["option"].item.length;
      let that = this;
      for (let index = 0; index < size; index++) {
        console.log('yo')
        const element = config["option"].item[index];
        let name = element['name'];
        let price = element['price'];
        let slug = element['slug']; 

        if(slug != null) {
          that.fillOption(name, price, slug)
        }
      }
    }

    getConfig() {
      let config = CurrentConfig['listOfOption'];
      let that = this;
      for (let key in config) {

        if(key === "option") {
          that.saveOptionArray(config);
        }
        else {
          let section = config[key]['section'];
          let name = config[key]['name'];
          let price = config[key]['price'];
          let slug = config[key]['slug'];
  
          if(slug != null) {
            that.fillConfig(section, name, price, slug)
          }
        }
      }
    }

    show() {
      let that = this;
      this.main.classList.add('config__pop--active')
      this.global.classList.add('config--pop')
      setTimeout(function(){
        that.closes();
        that.getConfig();
        that.fillPrice();
      }, 200);
    }
    unshow() {
      this.main.classList.remove('config__pop--active')
      this.global.classList.remove('config--pop')
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
      this.close = document.querySelector('.config--pop')
      this.close.addEventListener('click', function(e) {
        if(that.close != null) {
          e.preventDefault();
          that.unshow();
          that.close = null;
        }
      })
    }
    init() 
    {
      if(this.main != null) {
        this.open()
      }
    }
}

export default Devis