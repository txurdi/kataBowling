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
			$tipo = 'pleno';
		} else if (strlen($frame)==2) { 
			if (substr($frame, 1,1)=='/') {
				$resultado = 10;
				$tipo = 'semipleno';
			} else {
				$resultado = (substr($frame, 0,1)+substr($frame, 1,1));
			}
		} else {
			$resultado = $frame;
		}
		if ($tipo_anterior=='semipleno'){
			if (substr($frame, 0,1)=='X') $resultado += 10;
			else if (substr($frame, 0,1)=='-') $resultado += 0;
			else $resultado += (substr($frame, 0,1));
		}
		if ($tipo_anterior=='pleno'){
			$resultado += $resultado;
		}
		return array($resultado, $tipo);
	}
		
	function resuelve($jugada) {
		if (substr($jugada,0,1)=='X'){
			$contador=1;
		} else {
			$contador=2;
		}
		$ar_frame1 = $this->puntua_frame(substr($jugada,0,$contador));
		$ar_frame2 = $this->puntua_frame(substr($jugada,$contador,2),$ar_frame1[1]);
		return $ar_frame1[0] + $ar_frame2[0];
	}
	
	
}
?>