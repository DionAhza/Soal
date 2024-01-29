<?php

$bil1 = [80,77,65,89,55,12,90,86];
$bil2 = [77,99,55,81,45,90,91,98];
$unik = array_combine($bil1,$bil2);
// $duplikat = array_filter(array_count_values($unik),"findDuplicates");
// print_r($duplikat);

//  foreach($unik as $item){
//     if($item=array_unique($unik)){
//         print_r($item);
//          echo "<br>" ;
//     }elseif($hitung==1){
//         array_pop($item);
//     }
//  }
$satu= array_intersect($bil1,$bil2);
$dua = array_merge(array_diff($bil1,$bil2),array_diff($bil1,$bil2));

echo"pertama".print_r($satu) ."<br>";
echo "kedua". print_r($dua);
    
       
    
