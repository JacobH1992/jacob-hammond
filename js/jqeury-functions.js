
// CUSTON JQUERY FUNCTIONS

/*
$(document).ready(function(){

 $('body, html').fadeIn('slow');

});
*/
 
$('.peek').click(function(){
 
    $("#ie-message").hide('slow');
	
});

$('#more').click(function(){

    $(".about-1").hide();
    $(".about-2").show();
	
});

$('#back').click(function(){

    $(".about-2").hide();
    $(".about-1").show();
	
});

  $(document).ready(function(){

    $(".top-msg").hide();

  });

 

