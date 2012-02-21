<?php
class kataBowling {
	private $ar_resultado = array();
	
	function __construct() {
		
	}
	
	function puntua_frame ($frame, $tipo_anterior='') {
		$resultado = 0;
		$tipo = '';	
		if ($frame=='-') {
			$resultado = 0;
		} else if ($frame=='X') {
			$resultado = 10;
			if ($tipo_anterior=='semipleno'){
				$resultado+=10;
			}
			$tipo = 'pleno';
		} else if (strlen($frame)==2) { 
			if (substr($frame, 1,1)=='/') {
				$resultado = 10;
				if ($tipo_anterior=='semipleno'){
					$resultado+=10;
				}
				$tipo = 'semipleno';
			} else {
				$resultado = (substr($frame, 0,1)+substr($frame, 1,1));
				if ($tipo_anterior=='semipleno'){
					$resultado+=substr($frame, 0,1);
				}
			}
		} else {
			$resultado = $frame;
		}
		return array($resultado, $tipo);
	}
		
	function resuelve($jugada) {
		$ar_frame1 = $this->puntua_frame(substr($jugada,0,2));
		$ar_frame2 = $this->puntua_frame(substr($jugada,2,2),$ar_frame1[1]);
		return $ar_frame1[0] + $ar_frame2[0];
	}
	
	
}
?>