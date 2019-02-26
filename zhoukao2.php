<?php 
function del($n,$m)
{
	//取出1到n之间的整数
	$str = range(1, $n);
	$count = count($str);
	// echo $count;
	// return $str;
	$a = 1;
	for ($i=0; $i < $count; $i++) { 
		if(!isset($str[$i]))
		{
			continue;
		}
		if ($a%$m == 0) {
			unset($str[$i]);
			$a = 1;
		}
		$a++;
	}
	return array_pop($str);
}
var_dump(del(4,2));

// function sums($arr)
// {
// 	rsort($arr);
// 	$array = [
// 		0=>$arr[0],
// 		1=>$arr[1],
// 		2=>$arr[2]
// 	];
// 	// return $array;
// 	$count = count($arr);
// 	// return $count;die;
// 	for ($i=0; $i < $count; $i++) {
// 		$sum = array_sum($array);
// 		$array[2][] = $arr[$i];
// 		return $sum;
// 		if ($sum<array_sum($arr[2])
// 		{
// 			$array=[
// 				0=>$arr[2],
// 				1=>$arr[0],
// 				2=>$arr[1]
// 			];
// 		}
// 		elseif($sum<array_sum($arr[1]){
// 			$array=[
// 				0=>$arr[1],
// 				1=>$arr[0],
// 				2=>$arr[2]
// 			];
// 		}
// 	}
// 	return $array;
// }
// $arr = [11,13,52,32,41];
var_dump(sums($arr));
function arr($arrs)
{
	$count = count($arrs);
	for ($i=0; $i <$count; $i++) { 
		if ($arrs[$i]>$arr[$i+1]) {
			
		}
	}
}
$arrs = ['8','7','45','92','41'];
var_dump(arr($arrs));
function bank($active_time,$active_time)
{
	$count = count($active_time);
	$a = 4;
	for ($i=0; $i <$count ; $i++) { 
		if ($a >0) {
			$arr[] = $active_time[$i];
		}
	}
}
$active_time =  [9.01, 9.10, 9.20, 9.21, 9.22];
$active_time = [0.30, 0.18, 0.22, 0.47, 0.11];
var_dump(bank($active_time,$process_time));



class PDO{

	private static $obj;
	private function __construct($sql)
	{
		$obj = new PDO('mysql:host=127.0.0.1;dbname=test;','root','root');
	}
	private function __clone()
	{

	}
	public function get_POD()
	{
		if(self::$obj instanceof SELF)
		{
			return SELF; 
		}
		self::$obj = new SELF;
		return self::$obj;
	}
	public function create()
	{
		$sql = "insert into user names='哈哈' and pwd = '123456'";

	}
	public function select()
	{
		$sql = "select * from user";
	}
	public function delete()
	{
	$sql = "delete from user where id = 1";
	}
	public function update()
	{
		$sql = "update user set name = 'dshh' pwd='111' where id = 1";
	}

}

 ?>