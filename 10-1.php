<?php

// 指定變數 x，用 for 迴圈計算 1+2+...+x 的值
$x = 100;

// 宣告一個計算總和用的變數 $sum
$sum = 0;

// 每次迴圈計算 1，然後加上 2，再加上 3，一直加到 x
$i = 1;
while($i<=$x){
	$sum = $sum + $i;
	$i++;
}

echo $sum;

?>