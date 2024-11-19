<?php
echo '<br/>';
echo '<b>4-9</b><br/>';
echo '課題１：';

for ($i = 1; $i < 7; $i++) {
    if ($i % 3 == 0) {
      echo $i . '<br/>　　　　';
    }
}

echo '<br/>';
echo '課題２：';
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
      echo $i . '<br/>　　　　';
    }
}

echo '<br/>';
echo '課題３：';
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0 && $i % 3 == 0) {
        echo $i . "は2の倍数かつ3の倍数です</br>　　　　";
    } 
    elseif ($i % 3 == 0) {
			echo $i . "は3の倍数です</br>　　　　";
    } 
    elseif ($i % 2 == 0) {
      echo $i . "は2の倍数です</br>　　　　";
    }
}


