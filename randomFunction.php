<?php

$aleatorio = rand(0,200);

	if ($aleatorio <= 100) {
		echo "Valor: ", $aleatorio, "<br>";
		echo "PEDRA DE MADEIRA";
	}
	else{
		echo "Valor: ", $aleatorio, "<br>";
		echo "TENTATIVA DE INVASÃO CONCLUÍDA";
	}
?>