<?php

$bensin = 100;//kg
$kurang =10;
$jarak=100;
// echo "bensin awal: ".$bensin."km<br><br>";
$i = 10;
do{
    if($i<=10){
        $bensin = $bensin-$kurang;
        echo "kg10Bensin: ".$bensin."km<br>";
    }elseif ($i>10 && $bensin != 0) {
        # code...
        $bensin = $bensin-($kurang*0.8);
        echo "kg".$i."Bensin: ".$bensin."km<br>";
    }
    $i+=10;
}while($i<=100);