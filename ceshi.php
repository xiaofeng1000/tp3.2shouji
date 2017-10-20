<?php
$i=1;
// $Damage_reason=array();
// $cost=array();
// var_dump($Damage_reason);
// var_dump($cost);
$Damagereason="内屏显示异常￥998,外屏碎(显示正常)￥100,";
$Damage=explode(",",$Damagereason);
var_dump($Damage);
echo "<br/>";
// for($i=0;$i<count($Damage);$i++){
// 	echo $Damage[$i];
// 	echo "<br/>";
// }
echo $Damage[1];
echo "<br/>";
echo "<hr/>";
for($i=0;$i<count($Damage);$i++){
	echo $Damage[$i];
	echo "<br/>";
	$Damage_reason[$i+1]=substr($Damage[$i],0,stripos($Damage[$i],'￥'));
	echo $Damage_reason[$i+1]."<br/>";
	$cost[$i+1]=substr($Damage[$i],stripos($Damage[$i],'￥')+3);
	echo $cost[$i+1]."<br/>";
}


$i=1;
echo $i+1;

 for($i=0;$i<count($pro);$i++){ 
 	if($pro[$i]['color']){ 
 		$color=explode(",",$pro[$i]{'color'}); 
 		for($c=0;$c<count($color);$c++){ 
 			echo "<option value='$c+1'>$color[$c]</option>" ;
 		} 
 	} 
 } 