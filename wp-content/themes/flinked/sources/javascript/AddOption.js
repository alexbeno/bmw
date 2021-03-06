import CurrentConfig from './CurrentConfig.js'

class AddOption
{
    /**
     * Constructor
     */
    constructor( options )
    {
      this.content = document.querySelector('.config__price');
      this.price = document.querySelector('.config__price__item');

      this.navButton = document.querySelectorAll('.config__term__item__add');
      this.optionButton = document.querySelectorAll('.config__nav__item__sub__link');

      this.basePrice;
      this.updatePrice = 0;
      this.tempPrice = 0;

      this.option = {
        moteur_moteur: {
          price: 0,
          name: "",
          slug: "",
        },

        exterieur_teintes_exterieures: {
          price: 0,
          name: "",
          slug: "",
        },
        exterieur_jantes: {
          price: 0,
          name: "",
          slug: "",
        },

        interieur_interieur: {
          price: 0,
          name: "",
          slug: "",
        },

        pack_pack: {
          price: 0,
          name: "",
          slug: "",
        },
        option: {
          item: [],
          price: 0,
        }
      };
    }

    getInfo() {
      this.basePrice = parseInt(this.price.getAttribute('data-price'));
      this.updatePrice = this.basePrice;
    }

    clearPrice() {
      this.price.innerHTML = Intl.NumberFormat().format(this.basePrice) + ',00€';
    }

    displayNewPrice() {
      let diff = this.updatePrice - this.basePrice;
      let displayPrice = this.basePrice;
      let that = this;
      let index = 0;
      this.price.setAttribute('data-update', this.updatePrice )

      if(diff === 0) {
        let temp = this.basePrice
        let tempB = Intl.NumberFormat().format(temp)
        that.price.innerHTML =  tempB + ',00€';
      }

      for (let index = 0; index < diff; index++) {
        let count = setTimeout(function(){
          index++;
          let temp = displayPrice += 1
          let tempB = Intl.NumberFormat().format(temp)
          that.price.innerHTML =  tempB + ',00€';
        }, 20);
      }
    }

    update( news ) {
      this.updatePrice = this.basePrice;
      this.updatePrice += news;
      CurrentConfig['price'] = this.updatePrice;
      this.displayNewPrice();
    }

    getTabPrice() {

      let that = this;
      this.tempPrice = 0;

      for (let key in this.option) {
        this.option[key];
        that.tempPrice += this.option[key].price;
      }
      this.update(this.tempPrice);
    }

    saveOption(optionCat, price, name, slug, taxo) {
      this.option[optionCat].price = price;
      this.option[optionCat].name = name;
      this.option[optionCat].slug = slug;

      CurrentConfig["listOfOption"][optionCat].price = price;
      CurrentConfig["listOfOption"][optionCat].name = name;
      CurrentConfig["listOfOption"][optionCat].slug = slug;

      if(taxo != "jante" && taxo != "color" && taxo != null) {
        CurrentConfig[taxo] = slug;
      }
      this.getTabPrice();
    }

    saveOptionArray(optionCats, prices, names, slugs, taxos) {
      let arrayOption = { price: prices, name: names, slug: slugs }
      this.option["option"].item.push(arrayOption);
      CurrentConfig["listOfOption"]["option"].item.push(arrayOption);
      this.getPriceArray();
    }

    checkOption(optionCats, prices, names, slugs, taxos, classSelect) {
      let size = this.option["option"].item.length;
      let present = false;
      let unsave = 0;
      if(size != 0) {
        for (let index = 0; index < size; index++) {
          const element = this.option["option"].item[index].slug;
          if(element === slugs) {
            present = true;
            unsave = index;
          }
        }
        if(present === false) {
          this.saveOptionArray(optionCats, prices, names, slugs, taxos)
        }
        else {
          this.option["option"].item.splice(unsave, 1);
          CurrentConfig["listOfOption"]["option"].item.splice(unsave, 1);
          classSelect.classList.remove('config__term__item--active');

          this.getPriceArray();
        }
      }
      else {
        this.saveOptionArray(optionCats, prices, names, slugs, taxos)
      }
    }

    getPriceArray() {
      let size = this.option["option"].item.length;
      let totalOptionPrice = 0;
      for (let index = 0; index < size; index++) {
        const element = this.option["option"].item[index].price;
        totalOptionPrice +=  element;

      }
      this.option["option"].price = totalOptionPrice;
      this.getTabPrice();
    }

    clickEvent () {
      let navButton = document.querySelectorAll('.config__nav__item__sub__link');
      let optionButton = document.querySelectorAll('.config__term__item__add');

      let size = optionButton.length;
      let that = this;

      for(let i = 0; i < size; i++ ) {
        optionButton[i].addEventListener('click', function(e) {
          e.preventDefault();


          if(this.getAttribute('data-option') === null) {
            let activeItem = document.querySelector('.config__term__item--active');
            if(activeItem != null) {
              activeItem.classList.remove('config__term__item--active')
            }
          }

          this.classList.add('config__term__item--active');
          let optionCat   = this.getAttribute('data-cat');
          let optionPrice = parseInt(this.getAttribute('data-price'));
          let optionName  = this.getAttribute('data-title');
          let optionSlug  = this.getAttribute('data-slug');
          let saveConfig = this.getAttribute('data-taxo');

          if(this.getAttribute('data-option') === "option") {
            that.checkOption(optionCat, optionPrice, optionName, optionSlug, saveConfig, this );
          }
          else {
            that.saveOption(optionCat, optionPrice, optionName, optionSlug, saveConfig );
          }
        })
      }
    }

    init()
    {
      if(this.content != null) {
        this.getInfo()
        this.clearPrice()
      }
    }
}

export default AddOption