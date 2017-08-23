	
$(document).ready( function() {
	
	$(".pagination_link").click(function(){
		$.ajax({
		  type: "POST",
		  url: "session.php",
		  data: { current_page: Number( $(this).text() ) },
		  success: function(response) {location.reload(); }
		});
	});
	
});