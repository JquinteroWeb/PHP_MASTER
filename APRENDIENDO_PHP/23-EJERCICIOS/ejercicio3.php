<?php
	/*

	Ejercicio 3 Programa que compruebe si una variable esta vacia y si esta vacia rellenarla con texto en minuscula y mostrarla en mayuscaulas y en negrita

	*/

	$letras = [];
	if(empty($letras)){

		array_push($letras,strtolower('Juan'));
		array_push($letras,strtolower('quInterO'));
		
		echo mostrar($letras);

	}else {

		echo 'El array esta no vacio';
	}

	function mostrar($array){
		$string = '<b>';
		foreach($array as $valor){
			$string .= strtoupper($valor).'<hr>';

		}
		$string .= '</b>';
 	 	return $string;
	}


 ?>