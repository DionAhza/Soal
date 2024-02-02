<form action="" method='post'>
    <input type="number" name="detik">
    <button type="submit">Pencet</button>

</form>

<?php
$detik = $_POST['detik'];
$menit;
$jam ;

if($detik>=60){
    if($detik<3600){
        $menit = $detik/60;
        $detik = $detik%60;
        echo "menit: ".round($menit)." detik: ".$detik; 
    }elseif($detik>=3600){
        $jam = $detik/3600;
        $menit = ($detik%3600)/60;
        $detik = ($detik%3600)%60;
        echo "jam:".round($jam)." menit:".round($menit)." detik:".$detik;
    }
}else{
    echo 'detik:'.$detik;
}
