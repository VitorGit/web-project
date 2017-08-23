<?php
	require_once("data.php");
?>
	
<html>
	<head>
		<title>Catalogo de veiculos</title>
		<link href="css/veiculos.css" rel="stylesheet" type="text/css"/>
		<meta name="description" content="Lista de veículos"/>
		<meta charset="UTF-8">
	</head>
	
	<body>
		
		<?php
			$primeiro = ($_SESSION['curr_page'] - 1) * $_SESSION['max_cells'];
			$ultimo = $_SESSION['curr_page'] * $_SESSION['max_cells'];
		?>
		
		<div id = "catalog_area">
			<?php for($i = $primeiro; $i < $ultimo; $i++)  {?>
				<div id="cell">
					<span id="nome">
						<span id= "modelo"> <?php echo $veiculos[$i]['modelo']; ?> </span> 
						<span id= "marca"> <?php echo $veiculos[$i]['marca']; ?> </span>
					</span>
					<span id= "preco"> R$<?php echo $veiculos[$i]['preco']; ?> </span>
					<span id= "km"> <?php echo $veiculos[$i]['kilometragem'] ?>Km </span>
					
					<span id = "data"> Adicionado: <?php echo $veiculos[$i]['data_adicionado']; ?> </span>
				</div>
			<?php }?>
		</div>
	</body>
</html>