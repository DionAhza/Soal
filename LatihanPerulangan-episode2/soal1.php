<?php

function upah($karyawan){
    $golongan = [
            
            '1' => 3000,
            '2' => 3500,
            '3' => 4000,
            '4' => 5000,
    ];
    

            $upah = $golongan[$karyawan[0]] * $karyawan[1];
            if($karyawan[1] > 40){
                $bonus = ($golongan[$karyawan[0]] * 1.5)*($karyawan[1]-40);
                echo "<hr>";
                echo "Terima kasih atas kerja keras anda bekerja lebih dari 40 jam <br>ini bonus: ".$bonus."<br>"."ini upah mu: ".$upah."<br>"."ini jumlah nya: ".$bonus+$upah."<br>";
            }else{
                echo "kamu bekerja kurang dari 40 jam <br>"."ini upah mu : ".$upah."<br>";
            }
        
}
//            gol,jam
 $karyawan = ['2',50];
upah($karyawan);
