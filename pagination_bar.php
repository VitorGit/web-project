<html>
	<header>
		<link rel="stylesheet" type="text/css" href="css/pagination_bar.css">
		<script type="text/javascript"  src="js/pagination_bar.js"></script>
	</header>
	
	<?php $number_of_links = $_SESSION['number_of_results'] / $_SESSION['max_cells'] ; ?>
	<body>
		<div class = "pagination_bar">
			<a class = "arrow"> << </a>
			<?php for($i = 1; $i <= $number_of_links; $i++) { ?>
				
				<?php if($i == $_SESSION['curr_page']) {?>
					<a class = "pagination_link active"><?php echo $i;?></a>
				<?php  continue; }; ?> 
				<a class = "pagination_link"><?php echo $i; ?></a>
				
			<?php }; ?>
			<a class = "arrow"> >> </a>
			
		</div>
	<body>
</html>