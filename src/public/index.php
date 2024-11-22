<?php
echo '<br/>';
echo '<b>4-10</b><br/>';
echo '課題１：';

$word1 = "hoge";

for ($i = 1; $i <= 6; $i++) {
    if ($word1 == "hoge" && $i % 2 == 0) {
        echo "wordがhoge かつ " . $i . "は2の倍数です<br/>　　　　";
        continue;
    }

    if($word1 == "hoge" && $i % 2 == 1){
        echo "wordがhoge かつ " . $i . "は2の倍数以外です<br/>　　　　";
        continue;
    }
    
    if ($i % 2 == 0) {
        echo "wordがhogeでない かつ " . $i . "は2の倍数です<br/>　　　　";
        break;
    }

    if($i % 2 == 1){
        echo "wordがhogeでない かつ " . $i . "は2の倍数以外です<br/>　　　　";
        break;
    }
}

echo '<br/>';
echo '課題２：';

$word = "fuga";

for ($i = 1; $i <= 6; $i++) {
    if ($word == "hoge" && $i % 2 == 0) {
        echo "wordがhoge かつ " . $i . "は2の倍数です<br/>　　　　";
        break;
    }

    if($word == "hoge" && $i % 2 == 1){
        echo "wordがhoge かつ " . $i . "は2の倍数以外です<br/>　　　　";
        break;
    }
    
    if ($i % 2 == 0) {
        echo "wordがhogeでない かつ " . $i . "は2の倍数です<br/>　　　　";
        continue;
    }

    if($i % 2 == 1){
        echo "wordがhogeでない かつ " . $i . "は2の倍数以外です<br/>　　　　";
        continue;
    }
}