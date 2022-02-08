<?php

//01.1 Area of rectangle
function area($length, $width){
		echo "Area of rectangle: ". $length*$width;
        echo "<br>";
	}

	area(5,7);

//01.2 Area of perimeter
function perimeter($length, $width){
    echo "Perimeter of rectangle: ". 2*($length+$width);
    echo "<br>";
}
perimeter(5,7);

//02. Calculate VAT
function VAT($amount){
    echo "15% of amount: ".(15/100)*$amount;
    echo "<br>";
}
VAT(1500);

//03. Finding if a number is odd or even
function CheckNum($num){
    if($num%2 == 0){
        echo $num." is even";
    }

    else{
        echo $num." is odd";
    }
    echo "<br>";
}
CheckNum(10);

//04. Finding the largest number
function CheckLarge($num1, $num2, $num3){
    if($num%2 == 0){
        echo $num." is even";
    }

    else{
        echo $num." is odd";
    }
    echo "<br>";
}
CheckLarge(10,15,25);

?>