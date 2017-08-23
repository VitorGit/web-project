$(document).ready( function() {
	$(".drop_content").hide();
	
	$(".drop_button_btn").click(function(){
		$(".drop_content").toggle();
	});
	
	$("#option_30, #option_50, #option_100, #option_150").click(send_data);
	
	function send_data(){
		
		  $.ajax({
          type: "POST",
          url: "session.php",
          data: { max_cells: Number( $(this).text() ) },
          success: function(response) {location.reload(); }
      });
	}
	
});