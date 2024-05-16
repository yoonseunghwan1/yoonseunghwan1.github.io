<?php
$n = 30;
$sum = 0;
$prod = 1;
$times = 1;

echo "1~ $n 까지 출력 : ";
for ($i = 1; $i <= $n; $i++) {
    echo "$i ";
}
echo "<br/>";

echo "1~ $n 까지 더한 값 출력 : ";
for ($i = 1; $i <= $n; $i++) {
    $sum += $i;
}
echo $sum;
echo "<br/>";

echo "1~ $n 까지 곱한 값 출력 : ";
for ($i = 1; $i <= $n; $i++) {
    $times *= $i;
}
echo $times;
