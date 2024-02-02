<?php

$pukul = "07:00-11:45-08:55";

function kesatu($jam){
    $hour = array(1900, 2245, 800); // Adjusted the array values to include 2245.
    
    foreach($hour as $key){
        if($key >= 1200){
            echo $jam . " AM" . "<br>";
        } else {
            echo $jam . " PM" . "<br>";
        }
        break;
    }
}

$jam = explode("-", $pukul);
kesatu($jam[0]);
kesatu($jam[1]);
kesatu($jam[2]);
?>
