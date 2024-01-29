<?php
$belanja=154000;
$diskon=0.07;

if($belanja >= 100000){
    $hasil=$belanja*$diskon;
    $akhir=$belanja-$hasil;
    echo 'yang harus dibayar oleh andi  : '.number_format($akhir,0,'','.').'<br>';
    echo "diskon: ".$diskon*100 ."%" ."<br>";
    echo "uang andi : ". number_format($belanja,0,'','.').'<br>';
    echo "harga diskon: ".number_format($hasil,0,'','.');
}else{
    echo $belanja;
}


