<?php
$str  = "666, Anton LaVey, 999";
$avava = explode(",", $str);
echo $avava[1];
echo "</br>";

$arr=array("one"=>"1","two"=>"2","three"=>"3");
$stroka=serialize($arr);
echo $arr;
$arr="text";
echo count ($arr);
$arr=unserialize($stroka);
echo count ($arr);
echo "</br>";

function func() {
	for ($i=0;$i<func_num_args();$i++){
		echo func_get_arg($i),"</br>";
		$k=func_get_arg($i);
		$sum=$sum+$k;
	}
	return $sum;
}
$num=func(1,2,3);
echo $num;
?>