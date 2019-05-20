 var elem = document.querySelector('.parallax');
 var instance = M.Parallax.init(elem, options);
 var instance = M.Parallax.getInstance(elem);
 instance.destroy();

  // Or with jQuery

 // $(document).ready(function(){
 // $('.parallax').parallax();
 // })
 var instance = M.Carousel.init({
    fullWidth: true
 });

  // Or with jQuery

 $('.carousel.carousel-slider').carousel({
    fullWidth: true
 });