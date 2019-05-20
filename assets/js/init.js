(function($){
  $(function(){

    $('.sidenav').sidenav();
    $('.parallax').parallax();

  }); // end of document ready
})(jQuery); // end of jQuery name space
M.AutoInit();
var elem = document.querySelector('.carousel');
var instance = M.Carousel.init(elem, options);
var instance = M.Carousel.getInstance(elem);
instance.next();
instance.next(3); // Move next n times.
instance.prev();
instance.set();
instance.set(3); // Set to nth slide.
instance.destroy();
instance.duration(200);
  // Or with jQuery
var eleme = document.querySelector('select');
var instanced = M.FormSelect.init(eleme, options);
var instanced = M.FormSelect.getInstance(eleme);
instanced.getSelectedValues();
instanced.destroy();

$(document).ready(function(){
    $('select').formSelect();
 });

$(document).ready(function(){
    $('.carousel').carousel();
});
