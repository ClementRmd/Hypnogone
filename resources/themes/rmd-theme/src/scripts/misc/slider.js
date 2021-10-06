module.exports = () => {
  // Slider Home
  new Glide('.glide-home', {
    type: 'carousel',
    perView: 3
  }).mount();

  // Slider Home
  new Glide('.glide-partner', {
    type: 'carousel',
    perView: 5,
    autoplay: 3000,
  }).mount();
}