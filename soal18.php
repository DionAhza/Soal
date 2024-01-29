<?php

$barang = [
    [
        'nama'=>'ban',
        'diskon'=>10,
    ],
    [
        'nama'=>'Oli mesin',
        
    ],
    [
        'nama'=>'kampas rem',
       
    ],
    [
        'nama'=>'busi',
        'diskon'=>9,
    ],
    [
        'nama'=>'akumulator',
        'diskon'=>7,
    ],
];

foreach ($barang as $key)  {
    if(!empty($key["diskon"])){
        echo "ini barang ada diskon : ". $key["nama"]." sebanyak ".$key['diskon']."<br>";
    }
}