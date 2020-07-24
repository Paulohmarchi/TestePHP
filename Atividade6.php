<?php
	
	echo $r = impar(1,10)."\n";
	
	echo $r = impar(1,6)."\n";

	echo $r = impar(10,12)."\n";
	
	echo $r = impar(10344,10340)."\n";
	
	function impar ($n1, $n2){
		$i = 0;
		$saida = 0;
		do{
			$n1+=1;
			$i = ($n1 % 2);
			if($i == 1){
				$saida = $saida.$n1.',';
			}
		}while($n1 != $n2);
		
		$saida = "Saida: ". substr($saida, 0, -1);
	    return $saida;
	}
?>