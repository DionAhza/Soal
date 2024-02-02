<?php

$lebar = 9;
$panjang = 13;

$rumah = $lebar*$panjang;

if($rumah <=90){
    echo "tipe rumah Dani adalah Tipe 36";
}elseif($rumah > 90 && $rumah <= 96){
    echo "tipe rumah Dani adalah Tipe 45";
}
elseif($rumah > 96 && $rumah <= 120){
    echo "tipe rumah Dani adalah Tipe 54";
}
elseif($rumah > 120 && $rumah <= 150){
    echo "tipe rumah Dani adalah Tipe 60";
}
elseif($rumah > 150){
    echo "tipe rumah Dani adalah Tipe 70";
}
echo "<br>"."luas rumah dani : ".$rumah;
