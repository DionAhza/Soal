<?php

// for($i=1;$i<=3;$i++){
//     for($a=1;$a<=10;$a++){
//       echo  $i."*".$a."<br>";
        
//     }
// }

$angka1= [1,2,3];
$angka2 = [1,2,3,4,5,6,7,8,9,10];

foreach($angka1 as $key){
    foreach($angka2 as $item){
         echo $key." x ".$item." hasilnya :".$key*$item."<br>";
    }
}