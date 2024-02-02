<form action="" method="post">

<input type="number" name="orang" >
<button type="submit">tambah</button></form>
<?php
    $orang = $_POST['orang'];

    $bus = $orang /7;
    if($orang <7 ){
        echo " 1 bus";
    }elseif($orang%7==0){
        echo $bus."bus";
    }elseif($orang%7!=0){
        $bis = $bus + 1;
        echo round($bis)."bus";
    }
    
?>