<?php

$umur = 100/4;
$mtk = 83;
$bindo =87;
$bing = 86;
$rata = ($mtk+$bindo+$bing)/3;

if($umur>=16 && $umur <= 25)
{
    if($mtk>=87 && $bind>=85 & $bing>=85){
        if($rata>=85){
            echo "diterima";
        }else{
            echo "coba lagi";
        }
    }else{
        echo "nilai ada yang tidak sesuai";
        // echo  $mtk.$bindo.$bing.false;
    }
}else{
    echo "umur tidak cukup";
}