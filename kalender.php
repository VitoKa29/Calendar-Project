<?php
error_reporting(0);

    $bulan = $_GET['bulan'];
	
    if (isset($bulan)) {
        switch($bulan){
            
            case "January" :
                include "bulan/January.php";
            break;

            case "February" :
                include "bulan/February.php";
            break;

            case "March" :
                include "bulan/March.php";
            break;

            case "April" :
                include "bulan/April.php";
            break;
            
            case "May" :
                include "bulan/May.php";
            break;

            case "June" :
                include "bulan/June.php";
            break;

            case "July" :
                include "bulan/July.php";
            break;

            case "August" :
                include "bulan/August.php";
            break;

            case "September" :
                include "bulan/September.php";
            break;
            
            case "October" :
                include "bulan/October.php";
            break;

            case "November" :
                include "bulan/November.php";
            break;

            case "December" :
                include "bulan/December.php";
            break;
            
        }
    }else {
        $now = date("F");
        include "bulan/$now.php";
    }	
		
		
?>