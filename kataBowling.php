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
			if (($tipo_anterior=='pleno')||($tipo_anterior=='pleno_pleno')){
				$tipo='pleno_pleno';
			} else {
				$tipo = 'pleno';
			}
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
		if ($tipo_anterior=='pleno_pleno'){
			$resultado += 2*$resultado;
		}
		return array($resultado, $tipo);
	}
		
	function resuelve($jugada) {
		$resultado = 0;
		$indice = 0;
		$tipo_anterior = '';
		while ($indice<strlen($jugada)) {	
			if (substr($jugada,$indice,1)=='X'){
				$tam=1;
			} else {
				$tam=2;
			}
			$ar_frame = $this->puntua_frame(substr($jugada,$indice,$tam),$tipo_anterior);
			$indice += $tam;
			$resultado += $ar_frame[0];
			$tipo_anterior = $ar_frame[1];
		}
		return $resultado;
	}
	

}
?>