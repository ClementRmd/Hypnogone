module.exports = () => {
  const slider = document.querySelector('.slider');
  
  const options = {
    type: 'carousel',
    perView: 4,
    peek: 100
  }

  new Glide(slider, options).mount()
}