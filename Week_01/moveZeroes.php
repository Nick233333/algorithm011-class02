<?php

// function moveZeroes($arr) {
// 	if (!is_array($arr) || count($arr) <= 1) {
// 		return $arr;
// 	}
	// $j = 0;
	// for ($i = 0; $i < count($arr); $i++) {
	// 	if ($arr[$i] != 0) {
	// 		$arr[$j] = $arr[$i];
	// 		if ($j != $i) {
	// 			$arr[$i] = 0;
	// 		}
	// 		$j++;
	// 	}
	// }
// 	return $arr;
// }

// $res = moveZeroes([2,3,4,7,0,1,2,0,]);
// print_r($res);

function moveZeroes($arr) {
	if (count($arr) < 1 || !is_array($arr)) {
		return $arr;
	}
	$j = 0;
	$temp = 0;
	for ($i = 0; $i < count($arr); $i++) { 
		if ($arr[$i] != 0) {
			$temp = $arr[$i];
			$arr[$i] = $arr[$j];
			$arr[$j] = $temp;
			$j++;
		}
	}
	return $arr;
}

print_r(moveZeroes([0,1]));
