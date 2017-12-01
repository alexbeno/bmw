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
      this.mainoptionContainer = document.querySelector('.config__pop__mainOption__container');
      this.priceItem = document.querySelector('.config__pop__choix__buy__price__span');
      this.global= document.querySelector('.config');
      this.button = document.querySelector('.config__price__devis')
      this.body = document.querySelector('body')
      this.optionButton = document.querySelector('.config__pop__choix__option--open')
      this.optionContainer = document.querySelector('.config__pop__mainOption')
      this.close;
      this.closeOptionButton;
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

      this.mainoptionContainer.appendChild(item.container)
      item.container.appendChild(item.name)
    }

    fillPrice() {
      let priceToInsert = Intl.NumberFormat().format(CurrentConfig.price) + ',00€';
      this.priceItem.innerText = priceToInsert;
    }

    saveOptionArray(config) {
      let size = config["option"].item.length;
      let that = this;
      for (let index = 0; index < size; index++) {
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

        }
        else if(key === "pack_pack") {

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
        that.option();
      })
    }
    closes() {
      let that = this;
      this.close = document.querySelector('.config--pop')
      this.close.addEventListener('click', function(e) {
        if(that.close != null) {
          e.preventDefault();
          that.unshow();
          that.justCloseOption();
          that.close = null;
        }
      })
    }
    cleanOption() {
      let item = document.querySelectorAll('.devis_item-containerOption');
      for (let index = 0; index <item.length; index++) {
        item[index].remove();
      }
    }
    closeOption() {
      let that = this;
      this.cleanOption();
      this.optionContainer.classList.remove('config__pop__mainOption--option')
      setTimeout(function(){
        that.main.classList.remove('config__pop--option')
        that.mainoptionContainer.classList.remove('config__pop__mainOption__container--option')
      }, 300);
      this.openOption = true;
      this.optionButton.innerText = 'Voir les options'
    }

    justCloseOption () {
      let that = this;
      that.optionContainer.classList.remove('config__pop__mainOption--option')
      that.mainoptionContainer.classList.remove('config__pop__mainOption__container--option')
      that.main.classList.remove('config__pop--option')
    }
    option() {
      let that = this
      let open = document.querySelector('.config__pop__choix__option--open');
      let close
      open.addEventListener('click', function(e) {
        e.preventDefault();
        if (open.classList.contains('config__pop__choix__option--open')) {
          that.cleanOption();
          that.saveOptionArray(CurrentConfig['listOfOption']);
          that.optionContainer.classList.add('config__pop__mainOption--option')
          that.main.classList.add('config__pop--option')
          that.mainoptionContainer.classList.add('config__pop__mainOption__container--option')
          that.innerText = 'Cacher les options'
        }
      })
    }
    init()
    {
      if(this.main != null) {
        this.open()
        this.body.classList.add('body--devis')
      }
    }
}

export default Devis