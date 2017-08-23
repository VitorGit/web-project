<?php
	if(!isset($_SESSION)) { 
        session_start(); 
    } 
	
	require_once('connection.php');
	
	$query = "SELECT * FROM veiculo";
	
	$veiculos_table = @$connection->query($query);
	
	if($veiculos_table){
		$_SESSION['number_of_results'] = $veiculos_table->num_rows;
		
		//converte todas as linhas em arrays dentro de outro array
		$veiculos = array();
		while($row = mysqli_fetch_array($veiculos_table)){
			$veiculos[] = 
				array('id' => $row['carro_id'], 
				'marca' => $row['marca'], 
				'modelo' => $row['modelo'],
				'ano' => $row['ano'], 
				'preco' => $row['preco'], 
				'usado' => $row['usado'], 
				'kilometragem' => $row['kilometragem'], 
				'tipo' => $row['tipo'], 
				'data_adicionado' => $row['data_adicionado'] 
			);
		}
	}
	else echo "Mysql table query failed: ".mysqli_error($connection);
	
	if( isset($_POST['marcas']) ){
		$t = $connection->query("SELECT DISTINCT marca FROM veiculo") or die(mysqli_error($connection)); 
		echo json_encode( $t->fetch_all() );
	}
	
	//cannot close the connection because this file will be called several times again
	//open and close every time???
?>