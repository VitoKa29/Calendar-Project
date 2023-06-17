<?php

include "koneksi.php";

session_start();
$username = $_SESSION["username"];

$sql = mysqli_query($conn, "SELECT * FROM event WHERE DAY(tanggal_mulai) = '$awal' AND MONTHNAME(tanggal_mulai) = '$bulan' AND username = '$username' AND status = 'ToDo'
                ORDER BY CASE 
                    WHEN priority = 'high' THEN 1 
                    WHEN priority = 'medium' THEN 2 
                    WHEN priority = 'low' THEN 3 END
                    ASC
");
$cek = mysqli_num_rows($sql);

if ($cek) {
    while($data = mysqli_fetch_array($sql)){
        $lower = strtolower($data["priority"]);
        echo"<h5 class='event $lower'>$data[title]</h5>";
    }
}


?>