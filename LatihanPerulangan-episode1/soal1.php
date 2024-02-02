<?php

$andi = 16;
$dani = $andi;
$beni = $dani + 3;
$eko = $beni - 5;

$umur= array($andi,$dani,$beni,$eko);

foreach( $umur as $key)
{
    if($key%4==0){
        echo $key," tahun kabisat","<br>";
    }elseif($key%4!=0){
        echo $key," bukan tahun kabisat","<br>";
    }
}