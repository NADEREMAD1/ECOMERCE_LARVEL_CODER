function change_image(image){

    var container = document.getElementById("main-image");

   container.src = image.src;
}
document.addEventListener("DOMContentLoaded", function(event) {
});


// start Slider
$(document).ready(function(){
	$(".wish-icon i").click(function(){
		$(this).toggleClass("fa-heart fa-heart-o");
	});
});
