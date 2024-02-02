<?php
//gunakan fungsi untuk menghitung suku pertama sampai 12 dari rumus a*4+n*3 dengan a = 9

$a = 9;
function satu($a){
    for($n=1;$n<=12;$n++)
    {
       $hasil= $a*4+$n*3;
        echo "hasil dari ".$a."*4"."+".$n."*3 =".$hasil."<br>";
    }
}

satu($a);