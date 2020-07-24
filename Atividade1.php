<?php
	$entrada = 'Carro, Avião, Mulher, Biscoito, Papagaio, Telefone, Água, Caderno';
	$cont = 0;
	$palavras = explode(',',$entrada);
	foreach($palavras as $palavra){
		$cont+=1;
	}

	echo "Existem ".$cont." palavras na string."; 
?>