$("#start").backstretch([
  //"img/background_color.jpg",
  "img/speakers/random_03.jpg",
  "img/speakers/sauter_01.jpg",
  "img/speakers/smigla-bobinski_01.jpg",
  "img/speakers/schmidt_01.jpg",
  "img/speakers/uva_01.jpg"
], { fade: 750, duration: 8000 });

// make the slideshow to start with a random image
$("#start").data('backstretch').show(Math.floor((Math.random() * 4) +1));