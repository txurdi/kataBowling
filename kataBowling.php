<?php
include_once "tablero.php";

class kataBowling {
	private $ar_resultado = array();
	
	function __construct() {
		
	}
	
	function resuelve($jugada) {
		if ($jugada=='-') return 0;
		return $jugada;
		
	}
	
	
}
?>