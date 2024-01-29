<?php

$peserta = 121;
$pesertaeko = 121+1;
$tahun = date('y');
$webapp= "01W";
$android = "02A";
$game = "03G";
$kelas = "smp";

if($kelas == "smp"){
    $kelas = "P";
    $eko= $pesertaeko.$webapp.$kelas.$tahun;
echo "nomor peserta eko: ".$eko;
}else{
    $kelas = "A" ;
    $eko= $pesertaeko.$webapp.$kelas.$tahun;
    echo "nomor peserta eko: ".$eko;
}





