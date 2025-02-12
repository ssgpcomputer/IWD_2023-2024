<?php


//Randomly choose number
$Number = 52;

 $Num = rand(0,$Number);
echo "random number:".	$Num;

echo "<br><br>";

//Binary,Octal,Hexadecimal 
$bin = DECBIN($Number);
$oct = DECOCT($Number);
$Hex = DECHEX($Number);

echo "Binary :".$bin . "  Octal :" .$oct ."  Hexadecimal :" .$Hex."<br>";
echo "<br>";
//display sin ,cos and tan 
$Sin = SIN($Number);
$Cos = COS($Number);
$Tan = TAN($Number);

echo "Sin : " . $Sin . "  Cos : " . $Cos . "  Tan : " . $Tan ;

echo "<br><br>";
?>

