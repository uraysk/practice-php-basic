<?php

echo "<br/>";
echo '<b>4-11</b><br/>';
echo '課題１：';
$arrayList = [
	[3, 5, 1, 0, 9, 12],
	[1, 2, 14, 10, 19, 1],
	[0, 3, 3, 3, 7, 2]
];
foreach ($arrayList as $array) {
  //Use max for extracting max number from arraylist
    echo max($array)."<br/>　　　　";
}

echo '<br/>';
echo '課題2：';

$arrayList = [
    [3, 5, 1, 0, 9, 12],
    [1, 2, 14, 10, 9, 1],
    [0, 3, 4, 10, 20, 2]
];


foreach ($arrayList as $array) {
  //Use array_filter for specifying number from arraylist which is divisible by three
    $divisibleByThree = array_filter($array, function($element) {
        return $element % 3 == 0;
    });
    //If divisibleByThree is not empty, echo max number is divisible by three
    if (!empty($divisibleByThree)) {
        echo max($divisibleByThree) . "<br/>　　　　";
    }
}
