<?php

$sekarang= " 08";
$minute="20";
// $jam = date("h");
// $menit = date("i");

if($sekarang >= '07' && $sekarang<="11" ){
    
    if($minute<="30"){
        echo "waaktunya memperkaya bos";
    }
}elseif($sekarang > "11"&& $sekarang<= "12"){
    if($minute<="15" ){
       echo "waktu istirahat dlu beres di marahin bos";  
    }

}elseif($sekarang >"12" && $sekarang < "16" ){
    if($minute<="60")
    echo "waktunya menjadi budak bos lagi";
}elseif($sekarang >="16" or $sekarang< "7" ){
    if($minute=="00")
    echo "waktu bebas lepas dari bos ";
}
