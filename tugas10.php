<?php
$arr = array(1, 3, 8, 2, 5, 7, 4, 0);

print("Sebelum Di Sorting :<br>");
print_r($arr);

$arr = bubble_sort($arr);
print("<br> Setelah Disorting (Bubble Sort) :<br>");
print_r($arr);


function bubble_sort($arr)
{
    do {
        $b = false;
        for ($i = 0, $c = count($arr) - 1; $i < $c; $i++) {
            if ($arr[$i] > $arr[$i + 1]) {
                list($arr[$i + 1], $arr[$i]) =
                    array($arr[$i], $arr[$i + 1]);
                $b = true;
            }
        }
    } while ($b);
    return $arr;
}
