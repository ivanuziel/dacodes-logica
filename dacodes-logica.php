<?php
$test = [
	
	[1,1],
	[2,2],
	[3,1],
	[3,3],
	[7,7], // R
	[7,2], // U
	[1,5], // R
];

function path($filas, $columnas){
	$res = 'R';
	if($filas == $columnas && $filas % 2 == 0 && $filas != 1){
		$res = 'L';
	}
	if($filas > $columnas){
		$res = 'U';

		if($filas % 2 == 0 || $columnas == 1)
			$res = 'D';		
	}
	if($columnas > $filas){
		if($filas % 2 != 0 && $filas > 1)
			$res = 'L';
	}

	return $res;
}

foreach ($test as $value) {
	var_dump(path($value[0], $value[1]));
}
