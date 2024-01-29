<?php

$bilangan = [75,77,87,70,90,81,69,87,66];

foreach($bilangan as $item)
{
    if($item >=75){
        echo "<b>".$item." kompeten"."<br></b>";
    }else{
        echo $item." tidak kompeten"."<br>";
    }
}
