<?php
echo "<b>4-8</b><br/>";
echo "課題１：";

$total = 0;
for($i=0; $i<5; $i++){
    $total += $i;
    var_dump($total);
}

echo '<br/>課題２：';
$total = 0;
for ($i = 0; $i < ($total = 105); $i++) {
    $total += $i;
}
var_dump($total);