<?php 
$b3 = 50000-0.2;
$b2 = 30000;
$b1 = 20000;

$tot_belanja = $b1+$b2+$b2;
if ($tot_belanja >75000){
    $dis= $tot_belanja*15/100;
    $tot_bayar = $tot_belanja - $dis;
    echo "total bayar anda adalah ".(integer)$tot_bayar;
}else{
    echo "Total bayar anda adalah ". (integer)$tot_belanja;
}


?>