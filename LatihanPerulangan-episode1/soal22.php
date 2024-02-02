<?php

//480 = 8 jam
$waktu = [480,20,30];
$jumlah = array_sum($waktu);

function satu($waktu){

    foreach($waktu as $key){
        if($key == 480){
            $jam = $key/60;
            echo $jam."jam adalah waktu kerja <br>";
        }elseif($key == 20){
            echo $key."menit adalah jam istirahat <br>";
        }elseif($key == 30){
            echo $key."menit adalah istirahat makan <br>";
        }
    }


}

satu($waktu);