<?php

$student = [
    [
        'nama'=>'andi',
        'nilai'=>[80,78,82,78,88],

    ],
    [
        'nama'=>'Beni',
        'nilai'=>[86,70,80,85,81],
    ],
    [
        'nama'=>'Dani',
        'nilai'=>[83,91,70,73,81]
    ],
    [
        'nama'=>'Eko',
        'nilai'=>[80,85,84,86,88]
    ],
];

foreach ($student as $key) {
    
   $nilai =array_sum($key['nilai']);
    echo $key['nilai'];
   echo "nilai ".$key['nama']."= ".$nilai."<br>";
   
  
}
