<?php

echo " <b>4-7</b><br>";
//num1が8を出力するようにデバッグ
$food = 7;
$num1 = 0;

if($food % 2 == 0){
  $num1 = $food / 2;
}

else{
    $num1 = ($food - 1) / 2;

    if($num1 > 2){
        $num1 += 5;
    }

    else{
        $num1 += 6;
    }
}
echo "課題１ : " . $num1 . "<br/>";


//num2がnum2は１２の倍数かつ２４の倍数です。を出力するようにデバッグ
//ifで複数条件の指定、$num2 % 12 == 0はelseifへ
$num2 = 72;
if ($num2 % 12 == 0 && $num2 % 24 == 0) {

  echo "課題２：numの値は12の倍数かつ、24の倍数です<br/>";

}
elseif ($num2 % 12 == 0) {

    echo "課題２：numの値は12の倍数です";

} 
elseif ($num2 % 24 == 0) {

    echo "課題２：numの値は24の倍数です<br/>";
    
}
