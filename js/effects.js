// JavaScript Document

$(document).ready(function() {
	/*Efecte estar ocult i apareixer al carregar la pagina*/
	$("#nav_container").hide().fadeIn(3000);
	
	/*Efecte reduir transparencia*/
	 $("#nav_container").hover(function(){
			$(this).fadeTo(1000, 1);
		},
		function(){
			$(this).fadeTo(1500, 0.4);
			});
			
	
	/*Efecte al header de apareixer/desapareixer progresivament*/
    $("header").hover(function(){
			$(this).fadeTo(1000, 1);
		},
		function(){
			$(this).fadeTo(1000, 0);
			});
	
	
	// Efecte transicio al fer click a la flecha
	$("a#arrow").on('click', function(event) {

    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        window.location.hash = hash;
      });
	  
	  $("#arrow").hide();
    } 
  });
	
	// Fer que desaparegui quan estigui per sota de la meitat de la pagina
    $(window).scroll(function() {
    if ( $(document).scrollTop() > $("#endpage").scrollTop() ){
      $("#arrow").hide();
    } else {
     	$("#arrow").show(); 
    }
  });

// ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});

	  
}); // tancament (document).ready