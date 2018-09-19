<?php //php 7.0.8


function mergeSort($array){
	if(count($array) == 1 ) return $array;
    
	$mid = count($array) / 2;
    $left = array_slice($array, 0, $mid);
    $right = array_slice($array, $mid);
	$left = mergeSort($left);
	$right = mergeSort($right);
	return merge($left, $right);
}
function merge($left, $right){
	$res = array();
	while (count($left) > 0 && count($right) > 0){
		if($left[0] > $right[0]){
			$res[] = $right[0];
			$right = array_slice($right , 1);
		}else{
			$res[] = $left[0];
			$left = array_slice($left, 1);
		}
	}
	while (count($left) > 0){
		$res[] = $left[0];
		$left = array_slice($left, 1);
	}
	while (count($right) > 0){
		$res[] = $right[0];
		$right = array_slice($right, 1);
	}
	return $res;
}
$array = array(100, 54, 7, 2, 5, 4, 1);
print_r($array);
print_r(mergeSort($array));
?>
    
?>
