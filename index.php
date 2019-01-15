<?php

$arr = [];
$arr [0]=0;
$arr [1]=1;
for ($i=2;$i<64;$i++){
    $arr [$i] = $arr [$i-1] +$arr [$i-2];
}

$k = 1;

echo "<b>Числа Фибоначчи</b>";
echo "<table border = 1 >";
foreach ($arr as $key => $value) {
    echo '<tr>';
    echo "<td>{$k}</td><td>{$value}</td>";
    echo '</tr>';
    $k += 1;
}
echo '<table>';

?>