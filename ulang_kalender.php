<?php

include "koneksi.php";

if (isset($_GET["bulan"])) {
    $bulan = $_GET["bulan"];
}else{
    $bulan = date("F");

}

for ($i=0; $i < 3; $i++) { 
    echo "<tr>";
    for ($j=0; $j < 7; $j++) { 
        echo "<td>
            <a href='?bulan=$bulan&tanggal=$awal'>
            $awal
        ";
            include "event.php";
        echo"
            </a>
            </td>";
        // $tanggal = $awal;
        // include "tanggal.php";
        $awal++;
    }
    echo "</tr>";
}





?>