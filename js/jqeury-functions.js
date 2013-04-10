
// CUSTON JQUERY FUNCTIONS

/*
$(document).ready(function(){

 $('body, html').fadeIn('slow');

});
*/
 
$('.peek').click(function(){
 
    $("#ie-message").hide('slow');
	
});


$("#grid-btn").click(function(){
   $("#detail-view").hide();
  $("#grid-view").show();
});

$("#detail-btn").click(function(){
   $("#grid-view").hide();
  $("#detail-view").show();
});


 

