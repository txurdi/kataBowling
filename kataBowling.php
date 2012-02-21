<?php
class kataBowling {
	private $ar_resultado = array();
	
	function __construct() {
		
	}
	
	function puntua_frame ($frame) {
		if ($frame=='-') return 0;
		if ($frame=='X') return 10;
		if (strlen($frame)==2) { 
			if (substr($frame, 1,1)=='/') {
				return 10;
			} else {
				return substr($frame, 0,1)+substr($frame, 1,1);
			}
	}
		return $frame;
		
	}
		
	function resuelve($jugada) {
		return ($this->puntua_frame(substr($jugada,0,2))+$this->puntua_frame(substr($jugada,2,2)));
	}
	
	
}
?>