/*================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 3.1
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================

NOTE:
------
PLACE HERE YOUR OWN JS CODES AND IF NEEDED.
WE WILL RELEASE FUTURE UPDATES SO IN ORDER TO NOT OVERWRITE YOUR CUSTOM SCRIPT IT'S BETTER LIKE THIS. */
document.addEventListener('DOMContentLoad', function(){
   var elem = document.querySelector('.sidenav');
var instance = M.Sidenav.init(elem, options);
});

$(document).ready(function(){
   $('.sidenav').sidenav();
});



