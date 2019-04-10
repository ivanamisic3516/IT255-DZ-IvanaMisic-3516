<?php
		header("Content-type: application/json");
		$json_array = array (
		'Ime' => 'Ivana',
		'Prezime' => 'Misic',
		'Broj indeksa' => '3516',
		'Smer' => 'Informacione tehnologije'
		);
		echo json_encode($json_array);
	
?>