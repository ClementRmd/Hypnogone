// module.exports = () => {
//   const blocHeader    = document.querySelector('.header');
//   const imgHeader = document.querySelector('.header__img');

//   if(imgHeader) {
//     imgHeader.style.top = 0;
//     imgHeader.style.left = 0;
//   }

//   if(blocHeader) {
//     const blocInfo  = blocHeader.getBoundingClientRect();
//     const maxHeight  = blocInfo.height - 100;
//     const maxWidth   = blocInfo.width;

//     setInterval(function(){
//       const numberHeight = getRandomHeight(0, maxHeight);
//       const numberWidth  = getRandomWidth(0, maxWidth);

//       console.log(numberHeight, numberWidth);

//       imgHeader.style.transform = `translate(${numberWidth}px, ${numberHeight}px)`;
//     }, 7000);
//     // const bloc_width = blocInfo.width - 40;
//     // let x = 0;

//     // setInterval(function() {
//     //   x = x + 1;

//     //   if(x >= bloc_width) {
//     //     x = 0;
//     //   }

//     //   var move = "translateX("+x+"px)";
//     //   // console.log(move);
//     //   // imgHeader.style.left = x+"px";
//     // }, 10);
//   }


//   function getRandomHeight(min, max) {
//     return Math.random() * (max - min) + min;
//   }

//   function getRandomWidth(min, max) {
//     return Math.random() * (max - min) + min;
//   }
// }