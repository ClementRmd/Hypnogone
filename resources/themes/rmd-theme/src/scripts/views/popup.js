module.exports = () => {
  class Popup {
    constructor (image) {
      this.image = image;
      this.overlayPopup = document.querySelector('.overlayPopup');
    }
    init () {
      this.image.addEventListener('click', () => {
        this.overlayPopup.classList.add('js-active-popup');
        const picture = this.image.querySelector('.picture');
        const pictureUrlFull = picture.dataset.img;
        
        this.createPopup(pictureUrlFull);

        const overlayPopupClose = document.querySelector('.overlayPopup__close');
        overlayPopupClose.addEventListener('click', () => {
          this.overlayPopup.innerHTML = ""; 
          this.overlayPopup.classList.remove('js-active-popup');
        })
      });
    }
    createPopup (href) {
      const newDiv = document.createElement('div');
      newDiv.classList.add("blocImgPopup");
      this.overlayPopup.appendChild(newDiv);

      const newImg = document.createElement('img');
      newImg.src = href;
      newDiv.appendChild(newImg);

      const divClose = document.createElement('div');
      divClose.classList.add("overlayPopup__close");
      this.overlayPopup.appendChild(divClose);

      const spanClose = document.createElement('span');
      divClose.appendChild(spanClose);
    }
  }
  


  const images = document.querySelectorAll('.splide .splide__slide');
  
  if (images) {
    images.forEach(image => {
      let popup = new Popup(image)
      popup.init()
    });
  }
}