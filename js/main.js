jQuery(document).ready(function  () {
	
	$(".slideimg").slidesjs({
		width: 800,
		height: 447,
		  play: {
      active: false,
        // [boolean] Generate the play and stop buttons.
        // You cannot use your own buttons. Sorry.
      effect: "slide",
        // [string] Can be either "slide" or "fade".
      interval: 5000,
        // [number] Time spent on each slide in milliseconds.
      auto: true
        // [boolean] Start playing the slideshow on load.
    }
		
	});

  //Funcion para activar enlace al hacer click sobre el elmento li del menu
  $(".menu li").click(function () {
    $(this).children()[0].click();
  });

});


