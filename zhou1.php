<?php 
//n到m之间的水仙花
function shui($n,$m)
{
	for ($i=$n; $i <=$m ; $i++) { 
		//判断是否是三位数
		if(strlen($i)==3)
		{
			//百位的数字
			$bai = floor($i/100);
			//十位的数字
			$shi = floor(($i-$bai*100)/10);
			//个位的数字
			$ge = $i%10;
			$sum = pow($bai,3)+pow($shi,3)+pow($ge,3);
			if($sum == $i)
			{
				$arr[]=$i;
			}
		}
	}
	return $arr;
}
var_dump(shui(100,1000));
echo "<br>";
//字符串首先出现3次的字符
function str($str)
{
	$len = strlen($str);
	$r =0;
	for ($i=0; $i <$len; $i++) { 

		for ($j=$i+1; $j <$len ; $j++) { 
			if($str[$i]==$str[$j])
			{
				$r++;
				if($r == 3)
				{
					return $str[$i];
				}
			}
		}
	}
}
var_dump(str("bhdbsiofba"));
echo "<br>";
//判断一个字符串是否为回文字符串
function rev($str)
{
	$len = strlen($str);
	$strs = '';
	for ($i=$len-1; $i >=0 ; $i--) { 
		$strs .= $str[$i];
		// echo "$strs";
	}
	if($str == $strs)
	{
		return "该字符串是回文字符串";
	}
	else
	{
		return "该字符串不是回文字符串";
	}
}
var_dump(rev("21211"));
echo "<br>";
//斐波那契数列
function fbnq($n)
{
	$arr = [];
	for ($i=0; $i <$n; $i++) { 
		if($i<2)
		{
			$arr[] = 1; 
		}
		else
		{
			$arr[$i] = $arr[$i-1]+$arr[$i-2];
		}
	}
	return $arr;
}
var_dump(fbnq(5));
echo "<br>";
// 数字对应的英文字母
function zimu($num)
{
	$zimu = range('a','z');
	// var_dump($zimu);
	$arr = '';
	$count = count($zimu);
	$shi = floor($num/$count);
	$yu = $num%$count;
	if($shi >= 1 )
	{
		if($yu == 0)
		{
			$shi--;
			if($shi >=1)
			{
				$arr .= $zimu[$shi-1];
			}
			$arr .= $zimu[$count-1];
		}
		else
		{
			$arr .= $zimu[$yu-1];
		}
	}
	else
	{
		$arr = $zimu[$yu-1];
	}
	return $arr;
}
var_dump(zimu(78));
echo "<br>";
// 传入一个数字n代表台阶的个数，每次只能走1阶或者2阶台阶，返回走到第n阶台阶一共有多少种走法
function tai($n)
{
	$count = '';
	for ($i=1; $i <=$n ; $i++) { 
		if($count = 1||$count = 2)
		{
			$count = 3;
			
		}
	}
	return $count;
}
var_dump(tai(3));


 ?>