$(document).ready( function() {
	$(".drop_content").hide();
	
	$(".drop_btn").click(function(){
		$(".drop_content").toggle();
	});
	
	$(window).click(function(e){
		if(!e.target.matches('.drop_btn')){
			$(".drop_content").hide();
		}
	});
	
	$.post( "data.php", {'marcas' : ''}, function( data ) {
			var marcas  = JSON.parse(data);
			$.each( marcas, function(name, value){
				$(".drop_content").prepend( $("<a></a>").text(value) );
			} );
		});
		
	$(".drop_content").on("click", "a", function(){
		$("#drop_bar_text").text( $(this).text() );
	});
		
	});