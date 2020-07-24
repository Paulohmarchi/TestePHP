<?php
	$entrada = 'Carro, Avião, Mulher, Biscoito, Papagaio, Telefone, Água, Caderno';
	$cont = 0;
	$palavras = explode(',',$entrada);
	foreach($palavras as $palavra){
		$palavras[$cont] = str_replace(' ','',$palavras[$cont]);
		if(substr($palavras[$cont], 0, 1) == 'C'){
			echo $palavras[$cont]."\n";
		}
		$cont+=1;
	}

?>