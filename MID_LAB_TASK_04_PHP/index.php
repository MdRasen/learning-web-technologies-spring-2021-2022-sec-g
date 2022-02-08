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
    $maxNum = $num1;

  if ($num1 >= $num2 && $num1 >= $num3)
    $maxNum = $num1;
  if ($num2 >= $num1 && $num2 >= $num3)
    $maxNum = $num2;
  if ($num3 >= $num1 && $num3 >= $num2)
    $maxNum = $num3;
  
  echo "Largest number is: $maxNum";
    echo "<br>";
}
CheckLarge(10,15,25);

//05. Print all the odd numbers between 10 to 100 
function PrintOdd(){
    for($i=11; $i<100; $i=$i+2){
        echo $i. "\n";
    }

    echo "<br>";
}
PrintOdd();

//06. Search an element from an array
function SearchElement($num){
    $numbers = [12, 15, 18, 13, 8];

    for($i=0; $i<4; $i++){
        if($numbers[$i] == $num){
            $found = true;
            $index = $i;
        }
    }
    
    if($found == true){
        echo "Number is found at index ".$index;
    }

    else{
        echo "Number isn't found.";
    }
    echo "<br>";
}
SearchElement(18);

?>