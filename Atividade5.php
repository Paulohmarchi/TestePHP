<?php
	$aux = array("Karim","Caio","Vinicius","Leandro","Felipe");
	sort($aux);
	
	foreach($aux as $key => $val){
	    echo "aux[" . $key . "] = " . $val . "\n";
	}
?>