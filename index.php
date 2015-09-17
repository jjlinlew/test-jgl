
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>jiguoliang</title>
</head>
<body>

<?php
$color='绿色';
echo "颜色是".$color.'<br>';
echo "My car is " . $color . "<br>";
echo "我的第一段 PHP 脚本！<br>";
$a=5;
$b=6;
$c=$a+$b;


function test(){
	global $a,$b,$c;
	$d=9;
	echo "内部<br>";
	echo "$a<br>";
	echo $b."<br>";
	echo $c."<br>";
	echo $d."<br>";
}
test();
echo "外部<br>";
echo $a."<br>";
echo $b."<br>";
echo $c."<br>";
echo $d."<br>";

$x=0;
function test1(){
	global $x;
	#static $x;
	echo $x.'<br>';
	$x++;
	echo $x.'<br>';
}
test1();
test1();
test1();

?>  

</body>
</html>
