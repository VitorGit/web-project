<?php
	if(!isset($_SESSION)) { 
        session_start(); 
    } 
	
	if( !isset($_SESSION['max_cells']) ){
		$_SESSION['max_cells'] = 30;
	}
		
	if ( !isset( $_SESSION['curr_page']) ){
		$_SESSION['curr_page'] = 1;
	}
	
	//receive a new $_SESSION['max_cells'] value from table_drop.js
	if( isset($_POST['max_cells']) ){
		$_SESSION['max_cells'] = $_POST['max_cells'];
		$_SESSION['curr_page'] = 1;
	}
	
	//receive a new $_SESSION['current_page'] value from pagination_bar.js
	if ( isset( $_POST['current_page']) ){
		$_SESSION['curr_page'] = $_POST['current_page'];
	}
	
?>