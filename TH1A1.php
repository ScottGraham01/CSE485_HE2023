<?php
function calculateOperations($arr) {
    $tong = $arr[0];
    $tich = $arr[0];
    $hieu = $arr[0];
    $thuong = $arr[0];

    for ($i = 1; $i < count($arr); $i++) {
        $tong += $arr[$i];
        $tich *= $arr[$i];
        $hieu -= $arr[$i];
        $thuong /= $arr[$i];
    }

    echo "Tổng các phần tử = " . implode(' + ', $arr) . " = $tong <br>";
    echo "Tích các phần tử = " . implode(' * ', $arr) . " = $tich <br>";
    echo "Hiệu các phần tử = " . implode(' - ', $arr) . " = $hieu <br>";
    echo "Thương các phần tử = " . implode(' / ', $arr) . " = $thuong <br>";
}

$arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];
calculateOperations($arrs);
?>
