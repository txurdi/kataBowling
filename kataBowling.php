<?php
include_once "tablero.php";

class kataBowling {
	private $ar_resultado = array();
	
	function __construct() {
		
	}
		
	function resuelve($jugada) {
		if ($jugada=='-') return 0;
		if ($jugada=='X') return 10;
		if (strlen($jugada)==2) { 
			if (substr($jugada, 1,1)=='/') {
				return 10;
			} else {
				return substr($jugada, 0,1)+substr($jugada, 1,1);
			}
	}
		return $jugada;
		
	}
	
	
}
?>