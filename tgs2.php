<?php
 function menghitung_rumus_berat($massa, $gravitasi) {
 $menghitung_rumus_berat = $massa * $gravitasi ;
 return $menghitung_rumus_berat;
 }
 
 function menghitung_rumus_daya($usaha, $waktu){
 $menghitung_rumus_daya = $usaha / $waktu;
 return $menghitung_rumus_daya;
 }
 
 $berat = menghitung_rumus_berat(4,3);
 $daya  = menghitung_rumus_daya (5,3);
 
 echo "berat : $berat<br />";
 echo "daya : $daya<br />";
 
?>