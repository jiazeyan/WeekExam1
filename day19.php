<?php 
function search($num)
{
	$arr=['5','8','7','10','6','3'];
	for ($i=0; $i < count($arr); $i++) {
		if ($num == $arr[$i]) {
		 	return $i;
		 }
	}
}
var_dump(search(10));

 ?>