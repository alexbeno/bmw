class Interieur {
  /**
   * Constructor
   */
  constructor(options) {
    this.main = document.querySelector('.config__car');
    this.main_image = document.querySelector('.config__car__image');
    this.main_3D = document.querySelector('.config__3D');
    this.img = document.createElement('img');
    this.setup = false;
  }
  clickCallback(url) {
    this.img.setAttribute('src', url);
  }

  createImg(url) {
    this.img.classList.add('config__term__item--interieur__view');
    this.img.setAttribute('src', url);
    this.main.appendChild(this.img);

    this.main_image.style.opacity = 0;
    this.main_3D.style.opacity = 0;
  }

  destroyInterieur() {
    if (this.setup === true) {
      let toDestroy = document.querySelector('.config__term__item--interieur__view');
      this.main.removeChild(toDestroy);

      this.main_image.style.opacity = 1;
      this.main_3D.style.opacity = 1;

      this.setup = false;
    }
  }

  clickEvent() {
    let that = this;
    let button = document.querySelectorAll('.config__term__item__add--interieur');
    if (document.querySelector('.config__term__item__add--interieur') != null) {
      let size = button.length;
      this.createImg(button[0].getAttribute('data-image'));
      button[0].classList.add('config__term__item--active');
      this.setup = true;

      for (let i = 0; i < size; i++) {
        button[i].addEventListener('click', function (e) {
          e.preventDefault();
          let url = this.getAttribute('data-image');
          that.clickCallback(url);
        });
      }
    }
  }

  init() {
    if (this.main != null) {}
  }
}

export default Interieur;