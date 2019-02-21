<?php 
function LastRemaining_Solution($n,$m)
{
	$str = range(1,$n);
	$a = 1;
	while (count($str)>1) {
		for ($i=0; $i <$n ; $i++) { 
			if(!isset($str[$i]))continue;
			if($a%$m == 0)
			{
				unset($str[$i]);
			}
			$a++;
		}
	}
	return array_pop($str);
}
var_dump(LastRemaining_Solution(4,2));



 ?>