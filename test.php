<?php
    $awal =  (int)substr($_POST["tanggal_mulai"],8,2);
    $akhir =  (int)substr($_POST["tanggal_selesai"],8,2)+1;

    for ($i=$awal; $i < $akhir; $i++) { 
        echo $i,",";
        $tampung = str_replace($awal,$i,$_POST["tanggal_mulai"]);
        echo $tampung."<br>";
    }


?>