<?php
$a = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
$b = [[7, 8, 9], [4, 5, 6], [1, 2, 3]];
$m = count($a);
$n = count($a[0]);
$p = count($b);
$q = count($b[0]);
echo "$m = $m $n = $n $p = $p $q = $q<br/>";
function printMatrix($mat)
{
    foreach ($mat as $row) {
        echo implode(" ", $row) . "<br/>";
    }
}
echo "the first matrix :<br/>";
printMatrix($a);
echo "the second matrix :<br/>";
printMatrix($b);
echo "the transpose for the first matrix is:<br/>";
for ($i = 0; $i < count($a); $i++) {
    for ($j = 0; $j < count($a); $j++) {
        echo $a[$j][$i] . " ";
    }
    echo "<br/>";
}
if ($m == $p && $n == $q) {
    echo "the addition of matrices is:<br/>";
    for ($i = 0; $i < $m; $i++) {
        for ($j = 0; $j < $n; $j++) {
            echo ($a[$i][$j] + $b[$i][$j]) . " ";
        }
        echo "<br/>";
    }
}
if ($n == $p) {
    echo "The multiplication of matrices:<br/>";
    for ($i = 0; $i < $m; $i++) {
        for ($j = 0; $j < $q; $j++) {
            $result[$i][$j] = 0;
            for ($k = 0; $k < $n; $k++) {
                $result[$i][$j] += $a[$i][$k] * $b[$k][$j];
            }
            echo $result[$i][$j] . " ";
        }
        echo "<br/>";
    }
}
