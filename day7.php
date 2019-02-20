<?php 
function chou($m)
{
	$yu = $m%2;
	// echo $yu;
	if($yu== 0)
	{
		$sheng = $m/2;
		// echo $sheng;
		if($sheng == 1 )
		{
			echo "该数是丑数";die;
		}
		else
		{
			chou($sheng);
		}
	}
	else
	{
		$yu = $m%3;
		// echo "$yu.";
		if($yu == 0)
		{
			$sheng = $m/3;
			if($sheng == 1 )
			{
				echo "该数是丑数";die;
			}
			else
			{
				chou($sheng);
			}
		}
		else
		{
			$yu = $m%5;
			// echo $yu;
			if($yu == 0)
			{
				$sheng = $m/5;
				// echo $sheng,"  ";
				if($sheng == 1 )
				{
					echo "该数是丑数";die;
				}
				else
				{
					chou($sheng);
				}
				
			}
			else
			{
				echo "该数不是丑数";die;
			}
		}
	}
}
var_dump(chou(26));



 ?>